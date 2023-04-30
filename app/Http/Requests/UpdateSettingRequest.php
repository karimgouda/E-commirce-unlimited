<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'phone'=>'nullable|max:20|min:6',
            'email'=>'nullable|max:25|min:10',
            'address'=>'nullable|max:255',
            'desc_en'=>'nullable',
            'desc_ar'=>'nullable'
        ];
    }
}
