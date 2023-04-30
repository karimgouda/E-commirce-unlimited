<?php

namespace App\Http\Requests\Admin\product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_en'=>'nullable|max:255',
            'name_ar'=>'nullable|max:255',
            'price'=>'nullable|numeric',
            'count'=>'nullable|numeric',
            'desc_en'=>'nullable',
            'desc_ar'=>'nullable',
            'category_id'=>'nullable|exists:categories,id',
            'image'=>'nullable|mimes:png,jpg,jpeg',
        ];
    }
}
