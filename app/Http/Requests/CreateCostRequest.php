<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCostRequest extends FormRequest
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
            'wallet_id' => 'required',
            'name' => 'required',
            'cost_category_id' => 'required',
            'amount' => 'required',
            'note' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'wallet_is.required' => 'not empty',
            'name.required' => 'not empty',
            'cost_category_id.required' => 'not empty',
            'amount.required' => 'not empty',
            'note.required' => 'not empty',
        ];
    }
}
