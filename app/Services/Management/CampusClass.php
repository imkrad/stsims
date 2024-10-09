<?php

namespace App\Services\Management;

use App\Models\SchoolCampus;
use App\Models\SchoolAddress;
use App\Models\SchoolCampusName;
use App\Models\SchoolCampusCourse;
use App\Models\SchoolCampusSemester;
use App\Models\SchoolCampusCourseCertification;
use App\Http\Resources\DefaultResource;

class CampusClass
{
    public function lists($request){
        $data = DefaultResource::collection(
            SchoolCampus::with('school.class','grading','term','agency')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('campus', 'LIKE', "%{$keyword}%")
                ->orWhereHas('school', function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', "%$keyword%");
                });
            })
            ->when($request->status, function ($query, $status) {
                $status = ($status == 'Active') ? 1 : 0;
                $query->where('is_active',$status);
            })
            ->when($request->grading, function ($query, $grading) {
                $query->where('grading_id',$grading);
            })
            ->when($request->term, function ($query, $term) {
                $query->where('term_id',$term);
            })
            ->when($request->agency, function ($query, $agency) {
                $query->where('agency_id',$agency);
            })
            ->orderBy('is_active','DESC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function name($request){
        $data = SchoolCampusName::create([
            'name' => $request->name,
            'campus_id' => $request->campus_id
        ]);

        return [
            'data' => $data,
            'message' => 'Name created successfully.', 
            'info' => 'The previous name has been added.',
        ];
    }

    public function save($request){
        $data = SchoolCampus::create([
            'campus' => $request->campus,
            'school_id' => $request->school_id,
            'agency_id' => $request->agency_id,
            'term_id' => $request->term_id,
            'grading_id' => $request->grading_id,
            'is_main' => 0
        ]);
        if($data){
            $data->address()->create([
                'address' => $request->info,
                'barangay_code' => $request->barangay['value'],
                'municipality_code' => $request->municipality['value'],
                'province_code' => $request->province['value'],
                'region_code' => $request->region['value'],
            ]);
        }
        return [
            'data' => $data,
            'message' => 'Campus created successfully.', 
            'info' => 'The new school has been added.',
        ];
    }

    public function update($request){
        $data = SchoolCampus::where('id',$request->id)->first();
        ($request->campus) ? $data->campus = $request->campus : '';
        ($request->grading_id) ? $data->grading_id = $request->grading_id : '';
        ($request->term_id) ? $data->term_id = $request->term_id : '';
        ($request->agency_id) ? $data->agency_id = $request->agency_id : '';
        if($data->save()){
            $data = SchoolAddress::where('campus_id',$request->id)->first();
            ($request->address) ? $data->address = $request->info : '';
            ($request->region) ? $data->region_code = $request->region['value'] : '';
            ($request->province) ? $data->province_code = $request->province['value'] : '';
            ($request->municipality) ? $data->municipality_code = $request->municipality['value'] : '';
            ($request->barangay) ? $data->barangay_code = $request->barangay['value'] : '';
            $data->save();
        }
        $data =  SchoolCampus::with('school.class','grading','term','agency')
        ->with('address.region','address.province','address.municipality','address.barangay')
        ->where('id',$request->id)->first();
        return [
            'data' => new DefaultResource($data),
            'message' => 'Campus updated successfully.', 
            'info' => "The campus details has been changed."
        ];
    }

    public function view($request){
        $data = SchoolCampus::with('school.class','grading','term','agency','names')
        ->with(['courses.course','courses.certifications' => function ($query) {
            $query->where('is_active', 1);
        },])
        ->with('address.region','address.province','address.municipality','address.barangay')
        ->where('id',$request->id)
        ->first();
        return $data;
    }

    public function semester(){
        $start = Carbon::parse($request->start_at)->format('Y-m-d');
        $end = Carbon::parse($request->end_at)->format('Y-m-d');
        $data = SchoolCampusSemester::create(array_merge($request->all(),['is_active' => true,'start_at' => $start, 'end_at' => $end]));
        if($data){
            $ids = SchoolCampusSemester::where('campus_id',$request->campus_id)->where('is_active',1)->where('id','!=',$data->id)->pluck('id');
            foreach($ids as $id){
                $scholar = ScholarEnrollment::where('is_enrolled',0)->where('semester_id',$id)->update(['is_missed' => 1]);
            }
            SchoolCampusSemester::where('campus_id',$request->campus_id)->where('id','!=',$data->id)->update(['is_active' => 0]);
            NewSemester::dispatch($data->id)->delay(now()->addSeconds(10));
        }
        return [
            'data' => $data,
            'message' => 'Semester added successfully.', 
            'info' => 'The new semester has been added.',
        ];
    }

    public function course($request){
        $data = SchoolCampusCourse::create($request->all());
        return [
            'data' => $data,
            'message' => 'Course added successfully.', 
            'info' => 'The new cousre has been added.',
        ];
    }

    public function certification($request){
        $data = SchoolCampusCourseCertification::create($request->all());
        if($data){
            $certification = SchoolCampusCourseCertification::where('course_id',$request->course_id)->update(['is_active' => 0]);
            $course = SchoolCampusCourse::where('id',$request->course_id)->update(['is_active' => 1]);
        }
        return [
            'data' => $data,
            'message' => 'Certification added successfully.', 
            'info' => 'The new certification has been added.',
        ];
    }

    public function grading(){
        
    }
}
