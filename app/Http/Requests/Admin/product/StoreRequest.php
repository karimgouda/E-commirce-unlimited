<?php

namespace App\Http\Requests\Admin\product;

use App\Http\services\LocalizationServices;
use App\Models\Admin\Product;
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
        $data = LocalizationServices::getModelRules(Product::$translatableData);

        return array_merge($data , [
            'price'=>'required|numeric',
            'count'=>'required|numeric',
            'category_id'=>'required|exists:categories,id',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);
    }
}
