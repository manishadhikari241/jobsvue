<?php

namespace App\Http\Requests\Admin\Employer;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class EmployerRequest extends FormRequest
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
            'company_name'=>'required',
            'company_email'=>'required',
            'industry_id'=>'required|exists:employer_industries,industry_id',
            'city_id'=>'required|exists:cities,city_id',
            'location'=>'required',
            'primary_contact_no'=>'required',
            'secondary_contact_no'=>'required',
            'username'=>'required',
            'password'=>'required',
            'status'=>'required:in:pending,suspended,active',
            'logo'=>'required',
            'package_id'=>'required|exists:company_packages,packages_id',
            'package_activated'=>'required',
            'package_expired'=>'required',
            'viewed'=>'required',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(['errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
