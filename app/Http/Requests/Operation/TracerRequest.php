<?php

namespace App\Http\Requests\Operation;

use Illuminate\Foundation\Http\FormRequest;

class TracerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch($this->type){
            case 'Employment Information':
                return [
                    'type' => 'required',
                    'employment' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'sector' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'sectorothers' => 'required_if:sector,Others',
                    'status' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'statusothers' => 'required_if:status,Others',
                    'occupation' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'occupationval' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'designation' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'date' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'company' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'address' => 'sometimes|required_if:employment,Employed Locally,Employed Abroad',
                    'name' => 'sometimes|required_if:employment,Self-Employed',
                    'address' => 'sometimes|required_if:employment,Self-Employed',
                    'business' => 'sometimes|required_if:employment,Self-Employed',
                    'years' => 'sometimes|required_if:employment,Self-Employed',
                    'reason' => 'sometimes|required_if:employment,Unemployed',
                ];
            break;
            case 'Professional Affiliations':
                return [
                    'type' => 'required',
                    'organization' => 'sometimes|required',
                    'duration' => 'sometimes|required',
                    'position' => 'sometimes|required',
                    'address' => 'sometimes|required'
                ];
            break;
            case 'Research and Development Involvement':
                return [
                    'type' => 'required',
                    'title' => 'sometimes|required',
                    'duration' => 'sometimes|required',
                    'fundsource' => 'sometimes|required',
                    'nature' => 'sometimes|required'
                ];
            break;
            case 'Awards and Recognitions Received':
                return [
                    'type' => 'required',
                    'title' => 'sometimes|required',
                    'date' => 'sometimes|required',
                    'awardingbody' => 'sometimes|required'
                ];
            break;
            default: 
                return [];
        }
    }

    public function messages(): array
    {
        switch($this->type){
            case 'Research and Development Involvement':
                return [
                    'duration.required' => 'required',
                    'fundsource.required' => 'required',
                ];
            break;
            case 'Employment Information':
                return [
                    'name.required_if' => 'required',
                    'business.required_if' => 'required',
                    'years.required_if' => 'required',
                    'address.required_if' => 'required',
                ];
            break;
            default: 
                return [];
        }
    }
}
