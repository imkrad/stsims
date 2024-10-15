<?php

namespace App\Services\Management;

use Hashids\Hashids;
use App\Models\ListCourse;
use App\Models\SchoolCampusCourse;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\Management\CourseResource;

class CourseClass
{
    public function lists($request){
        $data = DefaultResource::collection(
            ListCourse::when($request->keyword, function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%")->orWhere('shortcut', 'LIKE', "%{$keyword}%");
            })
            ->when($request->status, function ($query, $status) {
                $status = ($status == 'Active') ? 1 : 0;
                $query->where('is_active',$status);
            })
            ->orderBy('is_active','DESC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function view($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->code);
        $data = SchoolCampusCourse::with('course','campus.school','campus.term','prospectuses')
        ->where('id',$id)->first();
        return $data;
    }

    public function update($request){
        $data = ListCourse::where('id',$request->id)->first();
        ($request->name) ? $data->name = $request->name : '';
        $data->shortcut = $request->shortcut;
        ($request->others) ? $data->others = $request->others : '';
        ($request->abbreviation) ? $data->abbreviation = $request->abbreviation : '';
        $data->save();

        return [
            'data' => new DefaultResource($data),
            'message' => 'Course updated successfully.', 
            'info' => "The course details has been changed."
        ];
    }
}
