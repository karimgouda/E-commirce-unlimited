<?php

namespace App\Http\Requests\Admin\product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name_en'=>'required|max:255',
            'name_ar'=>'required|max:255',
            'price'=>'required|numeric',
            'count'=>'required|numeric',
            'desc_en'=>'required',
            'desc_ar'=>'required',
            'category_id'=>'required|exists:categories,id',
            'image'=>'required|mimes:png,jpg,jpeg',
        ];
    }
}
