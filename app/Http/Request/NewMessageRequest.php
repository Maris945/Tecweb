

<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class NewMessageRequest extends FormRequest
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
            'Contenuto' => 'required',
            'Data_messaggio' => 'required',
            'created_at' => '',
            'updated_at' => '',
        ];
    }
}