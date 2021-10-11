<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateIncomeRequest extends FormRequest
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
            'amount' => 'required|numeric',
            'note' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Cant be left empty!',
            'amount.required' => 'Cant be left empty!',
            'amount.required' => 'Can only enter numbers!',
            'note.required' => 'Cant be left empty!'
        ];
    }

}
