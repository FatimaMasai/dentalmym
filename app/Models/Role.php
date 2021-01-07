<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class Role extends Model
{
    use HasFactory;
    protected $table = "tbl_rol";
    protected $fillable = ['id', 'nombre', 'slug' ,'descripcion', 'estado', 'created_at', 'updated_at'];

    //relacion este rol tiene muchos permisos 
    public function Permission()
    {
        return $this->hasMany('App\Models\Permission'); 
    }
    //un rol puede tener muchos usuarios
    public function User()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //almacenamiento
    public function store($request)
    {
        $slug = Str::slug($request->nombre, '-');
        Alert('Éxito', 'El rol se ha guardado', 'success')->showConfirmButton();
        // toast('Rol guardado', 'success', 'top-rigth');
        return self::create($request->all() + [
            'slug' => $slug,
        ]);
    }
    //almacenamiento update
    public function my_update($request)
    {   
        $slug = Str::slug($request->nombre, '-');
        self::update($request->all() + [
            'slug' => $slug  
        ]);
    }

}
