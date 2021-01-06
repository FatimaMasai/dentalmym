<?php

namespace App\Http\Requests\Role;

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
            'nombre' => 'required|unique:tbl_rol,nombre,' . $this->route('role')->id . '|max:255', 
            'descripcion' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El campo de nombre es requerido',
            'nombre.unique' => 'El nombre ya está ocupado', 
            'descripcion.required' => 'La descripcion es requerida',
        ];
    }
}
