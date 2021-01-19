<?php

namespace App\Http\Requests\TipoServicio;

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
            'nombre' => 'required|unique:tbl_tipo_servicio,nombre,' . $this->route('tiposervicio')->id . '|max:255', 
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El campo de nombre es requerido',
            'nombre.unique' => 'El nombre ya fue registrado',
        ];
    }
}
