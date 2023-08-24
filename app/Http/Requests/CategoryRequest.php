<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [
        'name' => 'required|string|max:255',
    ];

    if ($this->isMethod('put')) {
        $rules['image'] = 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048';
    } else {
        $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
    }
    return $rules;
    }
}
