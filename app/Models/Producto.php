<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "tbl_producto";
    protected $fillable = ['id', 'id_tipo_producto', 'nombre', 'precio', 'estado', 'created_at', 'updated_at'];
    
    public function TipoProducto()
    {
        return $this->belongsTo('App\Models\TipoProducto', 'id_tipo_producto', 'id');
    }
}
