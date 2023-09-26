<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
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
            'slug' => 'required',
            'name_vehicle' => 'required',
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'status' => 'nullable',
            'gambar' => 'nullable|image'
        ];
    }
}
