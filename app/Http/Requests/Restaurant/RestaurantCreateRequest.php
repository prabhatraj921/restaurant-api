<?php


namespace App\Http\Requests\Restaurant;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RestaurantCreateRequest extends FormRequest
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
            'address_line_1' => 'required|string',
            'address_line_2' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|string',
            'country' => 'required|string',
            'logo_file_id' => 'nullable|numeric',
            'contact_number' => 'required|string',
            'ext' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Name is required!',
            'address_line_1' => 'Address is required!',
            'city' => 'City is required!',
            'state' => 'State is required!',
            'zipcode' => 'Zipcode is required!',
            'country' => 'Country is required!',
            'contact_number' => 'Contact number is required!',
        ];
    }


}

