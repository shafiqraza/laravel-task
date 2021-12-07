<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|min:3|max:20',
            'lastname' => 'required|min:3|max:20',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required|unique:employees,phone|min:11|max:20',
            'salary' => 'required|integer|between:1,100'
        ];
    }
}
