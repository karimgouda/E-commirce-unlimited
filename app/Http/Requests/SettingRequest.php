<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'phone'=>'required|max:20|min:6',
            'email'=>'required|max:25|min:10',
            'address'=>'required|max:255',
            'desc_en'=>'required',
            'desc_ar'=>'required'
        ];
    }
}
