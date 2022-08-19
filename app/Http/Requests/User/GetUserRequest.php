<?php


namespace App\Http\Requests\User;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class GetUserRequest extends FormRequest
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
            'user_id' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'id is required!',
        ];
    }


}
