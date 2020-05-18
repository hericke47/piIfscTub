<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|min:3',
            'start' => 'date_format:Y-m-d H:i:s|before:end',
            'end' => 'date_format:Y-m-d H:i:s|after:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Preencha o campo Titulo',
            'title.min' => 'Titulo necessita de pelo menos 03 caracteres!',
            'start.date_format' => 'Preencha uma data inicial com o valor válido!',
            'start.before' => 'A data/hora Inicial deve ser menor que a data final!',
            'end.date_format' => 'Preencha uma data final com o valor válido!',
            'end.after' => 'A data/hora Final deve ser maior que a data inicial!',
        ];
    }

}
