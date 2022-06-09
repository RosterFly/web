<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFlightRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'flightnumber' => 'required|string|max:255',
            'aircraftid' => 'required|integer|exists:hangars,id',
            'etd' => 'required|date|before:eta',
            'eta' => 'required|date',
            'ICAOdeparture' => 'required|string|max:4',
            'ICAOarrival' => 'required|string|max:4',
            'passengers' => 'nullable|integer',
            'cargo' => 'nullable|integer',
            'fob' => 'nullable|integer',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
