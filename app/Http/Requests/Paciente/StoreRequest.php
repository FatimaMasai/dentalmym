<?php

namespace App\Http\Requests\Paciente;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'id_persona' => 'required|unique:tbl_paciente|max:255',
            'alergia' =>'required',
            'observacion' => 'required',
            'responsable' => 'required',
            'antecedentes' => 'required',
            'recomendado'   => 'required',
        ];
    }
    public function messages()
    {
        return [ 
            'id_persona.unique' => 'La persona ya fue registrada',
            'id_persona.required' => 'Seleccione un paciente',
            'alergia.required' => 'El campo alergia es requerido',
            'observacion.required' => 'El campo observacion es requerido', 
            'responsable.required' => 'El campo responsable es requerido',
            'antecedentes.required' => 'El antecedente es requerido e importante',
            'recomendado.required' => 'El campo recomendado es requerido',
        ];
    }
}
