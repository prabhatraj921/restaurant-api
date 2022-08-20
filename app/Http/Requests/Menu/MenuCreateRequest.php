<?php


namespace App\Http\Requests\Menu;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class MenuCreateRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'nullable|string',
            'file_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Name of category is required!',
            'restaurant_id' => 'File type is required!',
            'file_id' => 'File is required!',
        ];
    }


}


