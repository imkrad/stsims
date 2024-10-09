<?php

namespace App\Services\Management;

use Carbon\Carbon;
use App\Models\SchoolCampus;
use App\Models\SchoolAddress;
use App\Models\SchoolCampusName;
use App\Models\SchoolCampusCourse;
use App\Models\SchoolCampusSemester;
use App\Models\SchoolCampusGrading;
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
        $data = SchoolCampus::with('school.class','grading','term','agency')
        ->with('names','gradings','semesters.semester')
        ->with(['courses.course','courses.certifications' => function ($query) {
            $query->where('is_active', 1);
        },])
        ->with('address.region','address.province','address.municipality','address.barangay')
        ->where('id',$request->id)
        ->first();
        return $data;
    }

    public function semester($request){
        $data = SchoolCampusSemester::create(array_merge($request->all(),[
            'is_active' => true,
            'start_at' => Carbon::parse($request->start_at)->format('Y-m-d'), 
            'end_at' => Carbon::parse($request->end_at)->format('Y-m-d')
        ]));
    
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
            'info' => 'The new course has been added.',
        ];
    }

    public function courseUpdate($request){
        $data = SchoolCampusCourse::findOrFail($request->id);
        $data->type = $request->type;
        $data->years = $request->years;
        $data->save();

        return [
            'data' => $data,
            'message' => 'Course updated successfully.', 
            'info' => 'The course has been updated.',
        ];
    }

    public function grading($request){
        $data = SchoolCampusGrading::create($request->all());
        return [
            'data' => $data,
            'message' => 'Grade added successfully.', 
            'info' => 'The new grade has been added.',
        ];
    }

    public function gradingUpdate($request){
        $data = SchoolCampusGrading::findOrFail($request->id);
        $data->grade = $request->grade;
        $data->upper_limit = $request->upper_limit;
        $data->lower_limit = $request->lower_limit;
        $data->is_failed = $request->is_failed;
        $data->is_incomplete = $request->is_incomplete;
        $data->save();
        
        return [
            'data' => $data,
            'message' => 'Grade updated successfully.', 
            'info' => 'The grade has been updated.',
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
}
