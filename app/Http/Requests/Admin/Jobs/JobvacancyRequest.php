<?php

namespace App\Http\Requests\Admin\Jobs;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class JobvacancyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employer_id'=>'required|exists:employers,employer_id',
            'job_title'=>'required',
            'job_description'=>'required',
            'no_of_vacancy'=>'required',
            'skills'=>'required',
            'duties_responsibility'=>'required',
            'job_level_id'=>'required|exists:joblevels,job_level_id',
            'job_type_id'=>'required|exists:jobtypes,job_type_id',
            'job_category_id'=>'required|exists:categories,id',
            'experience'=>'required',
            'education'=>'required',
            'currency_id'=>'required|exists:currencies,currency_id',
            'salary'=>'required',
            'job_posted_date'=>'required',
            'valid_date'=>'required',
            'status'=>'required|in:expired,active',
            'viewed'=>'required',
            'job_location'=>'required',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(['errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
