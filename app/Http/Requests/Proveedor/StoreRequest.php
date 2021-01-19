<?php

namespace App\Http\Requests\Proveedor;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Proveedor;
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
            'id_persona' => 'required|unique:tbl_proveedor|max:255', 
            'empresa' => 'required', 
            'nit' => 'required',
        ];
    }
    public function messages()
    {
        return [ 
            'id_persona.unique' => 'El Proveedor ya fue registrado',
            'id_persona.required' => 'El campo Proveedor es requerido',
            'empresa.required' => 'El campo empresa es requerido', 
            'nit.required' => 'El Nit es requerido',
        ];
    }
}
