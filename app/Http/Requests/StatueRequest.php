<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatueRequest extends FormRequest
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
            'person' => 'required|min:5',
            'height' => 'required|numeric|min:0|max:250',
            'price' => 'required|numeric|min:1000',
        ];
    }
}
