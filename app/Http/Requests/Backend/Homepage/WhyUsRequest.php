<?php

namespace App\Http\Requests\Backend\Homepage;

use Illuminate\Foundation\Http\FormRequest;

class WhyUsRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'why_title'         => 'required|string|max:60',
            'why_description'   => 'required',
            'image_input'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'why_title.required'           => 'Please enter title',
            'why_description.required'     => 'Please enter description',
            'image_input.required'         => 'Please select an image',
        ];
    }
}
