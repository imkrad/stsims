<?php

namespace App\Services\Operation\Benefit;

use App\Models\Release;
use App\Models\EnrollmentBenefit;

class SaveClass
{
    public function pending($request){
        $data = \DB::transaction(function () use ($request){
            $attachment = [];
            $count = Release::whereYear('created_at',now())->count();
            $data = Release::create(
                array_merge($request->all(),[
                    'attachment' => json_encode($attachment),
                    'user_id' => \Auth::user()->id,
                    'batch' => str_pad(($count+1), 5, '0', STR_PAD_LEFT),
                    'status_id' => 18
                ])
            );
            foreach($request->lists as $list){
                foreach($list['enrollments'] as $enrollment){
                    foreach($enrollment['benefits'] as $benefit){
                        $benefit = EnrollmentBenefit::where('id',$benefit['id'])->first();
                        $benefit->status_id = 19;
                        $benefit->release_id = $data->id;
                        $benefit->save();
                    }
                }
            }
            return $data;
        });

        return [
            'data' => $data,
            'message' => 'Enrollment was added.', 
            'info' => 'Enrollment details have been successfully added.',
        ];
    }
}
