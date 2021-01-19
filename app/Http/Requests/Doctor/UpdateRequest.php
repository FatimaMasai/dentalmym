<?php

namespace App\Http\Requests\Doctor;

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
            'id_persona' => 'required|unique:tbl_doctor,id_persona,' . $this->route('doctor')->id . '|max:255',
            'especialidad' => 'required', 
        ];
    }
    public function messages()
    {
        return [ 
            'id_persona.unique' => 'El Doctor ya fue registrado',
            'id_persona.required' => 'El campo Doctor es requerido',
            'especialidad.required' => 'El campo especialidad es requerido', 
        ];
    }
}
