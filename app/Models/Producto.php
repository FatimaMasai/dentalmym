<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class Producto extends Model
{
    use HasFactory;
    protected $table = "tbl_producto";
    protected $fillable = ['id', 'id_tipo_producto', 'nombre', 'precio', 'estado', 'created_at', 'updated_at'];
    
    public function TipoProducto()
    {
        return $this->belongsTo('App\Models\TipoProducto', 'id_tipo_producto', 'id');
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
