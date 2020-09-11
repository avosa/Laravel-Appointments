<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Illuminate\Http\Response;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('doctor_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'email'         => 'required|email|unique:doctors',
            'name'          => 'required|string|max:50|min:3',
            'phone'         => ['required','unique:doctors', 'regex:/^(0|\+?254)(\d){9}$/'],
            'services.*'    => 'integer',
            'services'      => 'required|array'
        ];
    }

    /**
     *  messages to be applied to the input.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'phone.regex' => 'Please provide a valid phone number.'
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'email' => 'trim|lowercase',
            'name' => 'trim|capitalize|escape'
        ];
    }
}
