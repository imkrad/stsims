<?php

namespace App\Http\Requests\Operation;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch($this->option){
            case 'enrollment':
                return [
                    'id' => 'sometimes|required',
                    'lists' => 'sometimes|required|min:1',
                    'files.*' => 'sometimes|required|mimes:pdf,docx|max:2000'
                ];
            break;
            case 'subcourse':
                return [
                    'level' => 'sometimes|required_if:has_level,false',
                ];
            break;
            default: 
                return [];
        }
    }
}
