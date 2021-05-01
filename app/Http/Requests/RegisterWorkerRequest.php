<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterWorkerRequest extends FormRequest
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
            'name' => 'required', 'string', 'max:255',
            'email'=>['required', 'string', 'email', 'max:255', 'unique:auditworkers'],
            'phoneNumber'=>['required', 'string', 'max:10', 'min:10', 'unique:auditworkers']
        ];
    }
}
