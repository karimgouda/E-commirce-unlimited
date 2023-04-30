<?php

namespace App\Http\Requests\User\Auth;

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
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'address'=>'required|max:255',
            'phone'=>'required|max:20|min:5',
            'password'=>'required|max:15|min:6|confirmed'
        ];
    }
}
