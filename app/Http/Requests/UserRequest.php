<?php

namespace App\Http\Requests;

namespace App\Http\Requests;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=> 'bail|required|string|max:255',
            'email'=> 'bail|required|string|max:255|email|unique:users',
            'password'=> ['bail','required','string','confirmed', Password::min(4)->mixedCase()]
        ];
    }
}
