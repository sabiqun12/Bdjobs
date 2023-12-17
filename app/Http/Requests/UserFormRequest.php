<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:11',
            'address' => 'required|string|max:255',
            'q_name' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'p_year' => 'required',
            'c_name'=> 'required|string|max:255',
            'c_institute' => 'required|string|max:255'

        ];
    }
}
