<?php

namespace App\Http\Requests\Persona;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nombre' => 'required',
            'apellido_pat' => 'required',
            'apellido_mat' => 'required',
            'fecha_nac' => 'required',
            'tipo_doc' => 'required',
            'numero_doc' => 'required|unique:tbl_persona,nombre,' . $this->route('persona')->id . '|max:20',
            'sexo' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'direccion' => 'required', 
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El campo de nombre es requerido',
            'apellido_pat.required' => 'El campo de apellido paterno es requerido',
            'apellido_mat.required' => 'El campo de apellido materno es requerido',
            'fecha_nac.required' => 'El campo de fecha nacimiento es requerido',
            'tipo_doc.required' => 'El campo de tipo documento es requerido',
            'numero_doc.unique' => 'El número de carnet ya está ocupado',
            'numero_doc.required' => 'El campo de numero de carnet es requerido',
            'sexo.required' => 'El campo sexo es requerido',
            'celular.required' => 'El campo celular es requerido', 
            'email.required' => 'El email es requerido',
            'direccion.required' => 'La direccion es requerida',
        ];
    }

}
