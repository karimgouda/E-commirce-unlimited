<?php

namespace App\Http\Requests\Admin;

use App\Http\services\LocalizationServices;
use App\Models\Admin\Category;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAdsRequest extends FormRequest
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
        $rules = Category::$rules;
        $data = LocalizationServices::getModelRules(Category::$translatableData);
        return array_merge($rules , $data);
    }
}
