<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class NewGroupRequest extends FormRequest
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
            'Nome_gruppo' => 'required|max:15',
            'data_creazione' => 'required',
            'n_componenti' => 'required',
            'aperto_chiuso' => 'required',
            'created_at' => '',
            'updated_at' => '',
        ];
    }
}

