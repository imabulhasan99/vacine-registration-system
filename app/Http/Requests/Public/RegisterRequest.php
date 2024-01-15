<?php

namespace App\Http\Requests\Public;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:1', 'max:255'],
            'email' => ['required', 'string', 'min:1', 'max:255'],
            'password' => ['required', 'string', 'min:1', 'max:255'],
            'phone' => ['required', 'string', 'min:1', 'max:255'],
            'nid' => ['required', 'integer', 'min:-9223372036854775808', 'max:9223372036854775807'],
            'center_id' => ['required', 'integer','min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'name'=> 'Name can not be empty',
            'email'=> 'Name can not be empty',
            'password'=> 'Password can not be empty',
            'phone'=> 'Phone can not be empty',
            'nid'=> 'Nid can not be empty',
            'center_id'=> 'Center can not be empty',
        ];
    }
}
