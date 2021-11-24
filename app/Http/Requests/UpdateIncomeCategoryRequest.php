<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIncomeCategoryRequest extends FormRequest
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
            'name' => 'required',
            'icon' => 'required|mimes:jpg,jpeg,png,bmp|max:20000'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Cant be left empty!',
            'icon.mimes' => 'Only jpeg,png and bmp images are allowed!',
            'icon.max' => 'Sorry! Maximum allowed size for an image is 20MB',
        ];
    }


}
