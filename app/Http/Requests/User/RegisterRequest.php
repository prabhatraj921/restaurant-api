<?php


namespace App\Http\Requests\User;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function authorize()
{
    return true;
}
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required||email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'password' => 'required', 'confirmed', Password::min(8),
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'first_name.required' => 'First is required!',
            'last_name.required' => 'Last is required!',
            'password.required' => 'Password is required!'
        ];
    }


}
