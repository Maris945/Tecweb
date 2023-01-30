<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ModifyUserRequest extends FormRequest
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
            'Username' => 'required|max:15',
            'Nome' => 'alpha|max:25',
            'Cognome' => 'alpha|max:25',
            'email' => 'required|max:30',
            'password' => 'nullable|confirmed|min:8|max:25',
            'datebirth' => 'before:today',
            'luogodinascita' => 'required',
            'indirizzo' => 'required',
            'datamicizia' => 'required',
            'descrizione' => 'nullable|max:1024',
            'accessoblog' => 'required',
            'amici' => 'nullable',
            'created_at' => '',
            'updated_at' => '',
        ];
    }
}