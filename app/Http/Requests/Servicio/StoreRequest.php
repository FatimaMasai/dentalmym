<?php

namespace App\Http\Requests\Servicio;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Servicio;

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
            'id_tipo_servicio' => 'required',
            'nombre' => 'required|unique:tbl_servicio|max:255', 
            'precio' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'id_tipo_servicio.required' => 'El Tipo de Servicio es requerido',
            'nombre.required' => 'El campo de nombre es requerido',
            'nombre.unique' => 'El nombre ya está ocupado', 
            'precio.required' => 'La precio es requerido',
        ];
    }
}
