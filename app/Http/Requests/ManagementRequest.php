<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch($this->option){
            case 'school':
                return [
                    'name' => 'required|unique:schools,name,'.$this->id,
                    'class_id' => 'required|integer',
                    'shortcut' => 'required',
                    'combiner' => 'nullable',
                    'campuses' => ['required','array'],
                    'campuses.*.name' => 'required|string',
                    'campuses.*.address' => 'required|string',
                    'campuses.*.grading_id' => 'required|integer',
                    'campuses.*.term_id' => 'required|integer',
                    'campuses.*.agency_id' => 'required|integer',
                ];
            break;
            case 'campus':
                return [
                    'campus' => 'required|string',
                    'address' => 'required|string',
                    'grading_id' => 'required|integer',
                    'term_id' => 'required|integer',
                    'agency_id' => 'required|integer'
                ];
            break;
            case 'campus-course':
                return [
                    'type' => 'required|string',
                    'years' => 'required|string',
                    'course_id' => 'required|integer|unique:school_campus_courses,course_id,NULL,'.$this->course_id.',campus_id,' . $this->campus_id.',type,'.$this->type,
                    'campus_id' => 'required|integer'
                ];
            break;
            case 'campus-course-certification':
                return [
                    'start_at' => 'required',
                    'end_at' => 'required',
                    'certification_id' => 'required|integer',
                    'course_id' => 'required|integer'
                ];
            break;
            case 'campus-semester':
                return [
                    'academic_year' => 'required',
                    'semester_id' => 'required|unique:school_campus_semesters,semester_id,NULL,id,campus_id,'.$this->campus_id.',academic_year,'.$this->academic_year,
                    'start_at' => 'required',
                    'end_at' => 'required',
                    'campus_id' => 'required'
                ];
            break;
            case 'campus-grading':
                return [
                    'grade' => 'required|integer',
                    'upper_limit' => 'required|integer',
                    'lower_limit' => 'required|integer',
                    'is_failed' => 'required',
                    'is_incomplete' => 'required',
                ];
            break;
            default: 
                return [];
        }
    }

    public function messages()
    {
        switch($this->option){
            case 'school':
                return [
                    'class_id.required' => '* required',
                    'shortcut.required' => '* required',
                    'campuses.required' => 'Need atleast 1 campus.',
                    'campuses.*.name.required' => '* required',
                    'campuses.*.address.required' => '* required',
                    'campuses.*.grading_id.required' => '* required',
                    'campuses.*.term_id.required' => '* required',
                    'campuses.*.agency_id.required' => '* required',
                ];
            break;
            default: 
                return [];
        }
    }
}
