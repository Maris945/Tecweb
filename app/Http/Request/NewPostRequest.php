<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewPostRequest extends FormRequest
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
            'ID_mittente' => 'required|max:15',
            'ID_destinatario' => 'required|max:15',
            'data_post' => 'required',
            'contenuto' => 'required',
            'created_at' => '',
            'updated_at' => '',
        ];
    }
}