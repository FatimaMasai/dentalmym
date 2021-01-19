<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Producto;
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
            'id_tipo_producto' => 'required',
            'nombre' => 'required|unique:tbl_producto|max:255', 
            'precio' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'id_tipo_producto.required' => 'El Tipo de Producto es requerido',
            'nombre.required' => 'El campo de nombre es requerido',
            'nombre.unique' => 'El nombre ya está ocupado', 
            'precio.required' => 'La precio es requerido',
        ];
    }
}
