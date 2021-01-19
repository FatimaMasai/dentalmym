<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class Persona extends Model
{
    use HasFactory;
    protected $table = "tbl_persona";
    protected $fillable = ['id', 'nombre','apellido_pat', 'apellido_mat','fecha_nac', 'tipo_doc', 
    'numero_doc','sexo', 'celular','email','direccion', 'estado','created_at', 'updated_at'];

    public function my_update($request)
    {   
        $slug = Str::slug($request->numero_doc, '-');
        self::update($request->all() + [
            'slug' => $slug  
        ]);
    }

}
