<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = "tbl_persona";
    protected $fillable = ['id', 'nombre','apellido_pat', 'apellido_mat','fecha_nac', 'tipo_doc', 
    'numero_doc','sexo', 'celular','email','direccion', 'estado','created_at', 'updated_at'];

  

}
