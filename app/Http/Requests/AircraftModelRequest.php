<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AircraftModelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'aircraft_model' => 'required',
            'manufacturer' => 'required',
            'IATACode' => 'required',
            'ICAOCode' => 'required|unique:aircraft_models',
            'type' => 'required',
            'wing_type' => 'required',
        ];
    }
}
