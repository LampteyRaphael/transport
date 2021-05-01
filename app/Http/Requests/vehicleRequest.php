<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vehicleRequest extends FormRequest
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
            'make'=> ['required', 'string', 'max:255'],
            'regNo'=> ['required', 'string', 'max:255'],
            'chasisNo'=> ['required', 'string', 'max:255'],
            'yearMade'=> ['required', 'string', 'max:255'],
            'purchaseDate'=> ['required', 'string', 'max:255'],
            'colour'=> ['required', 'string', 'max:255'],
            'countryOfOrigin'=> ['required', 'string', 'max:255'],
            'cubicCentimeter'=> ['required', 'string', 'max:255'],
            'fuel'=> ['required', 'string', 'max:255']
        ];
    }
}
