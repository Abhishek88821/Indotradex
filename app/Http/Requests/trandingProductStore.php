<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class trandingProductStore extends FormRequest
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
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'specifications_key.*' => 'required',
            'specifications_value.*' => 'required',
        ];

        if ($this->isMethod('put')) {
            $rules['image'] = 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048';
            $rules['icon'] = 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048';
        } else {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
            $rules['icon'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }
    
        return $rules;

    }
}
