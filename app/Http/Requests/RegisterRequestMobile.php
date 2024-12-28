<?php

namespace App\Http\Requests;


class RegisterRequestMobile extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'phone'    => 'nullable|string',
            'email'    => 'required|email|unique:users',
            'name'     => 'nullable|string',
            'gender'    => 'required',
            'birth_date'    => 'required',

        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Custom validation message
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'gender.required'    => 'Please give your gender',
            'birth_date.required'    => 'Please give your birth date',
            'email.required'    => 'Please give your email',
            'email.email' => 'Please enter a valid email address!',
            'name.string' => 'Please give your name string',
            'email.unique' => 'We have noticed that you are already registered with Eventy. To proceed, please log into your existing account.',
        ];
    }
}
