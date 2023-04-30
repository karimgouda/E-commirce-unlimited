<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class OrderDetalisRequest extends FormRequest
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
            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'email'=>'required|max:40|min:10',
            'phone'=>'required',
            'address_one'=>'required|max:255',
            'address_tow'=>'required|max:255',
            'country'=>'required|in:cairo,giza,mansoura',
            'city'=>'required|max:255',

        ];
    }
}
