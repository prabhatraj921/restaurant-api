<?php


namespace App\Http\Requests\FileHandler;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class FileHandlerRequest extends FormRequest
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
            'file' => 'required',
            'file_type_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'file_type_id' => 'File type is required!',
            'file' => 'File is required!',
        ];
    }


}


