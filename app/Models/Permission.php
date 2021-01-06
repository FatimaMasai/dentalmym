<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = "tbl_permiso";
    protected $fillable = ['id','id_rol', 'nombre', 'prioridad' ,'descripcion', 'estado', 'created_at', 'updated_at'];

    //relacion un permiso pertenece a un Rol
    public function Role()
    {
        return $this->belongsTo('App\Models\Role'); 
    }
    //muchos usuarios tiene muchos permisos
    public function User()
    {
        return $this->belongsToMany('App\Models\User');
    }

}
