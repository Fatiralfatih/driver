<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePesananRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {   
        return [
            'invoice' => 'required',
            'vehicle_id' => 'required',
            'costumer_id' => 'required',
            'tujuan' => 'required',
            'harga' => 'required|numeric|min:0',
            'pesan' => 'required',
            'status' => 'nullable',
            'confirmed' => 'required'
        ];
    }
}
