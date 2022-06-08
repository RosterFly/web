<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlightRequest extends FormRequest
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
            'flightnumber' => 'required|string|max:255',
            'aircraftICAO' => 'required|string|min:4|max:4',
            'etd' => 'required|date',
            'eta' => 'required|date',
            'ICAOdeparture' => 'required|string|max:4',
            'ICAOarrival' => 'required|string|max:4',
            'userid' => 'required|integer|exists:users,id',
        ];
    }
}
