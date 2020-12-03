<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;
    protected $table = "tbl_tipo_producto";
    protected $fillable = ['id','nombre','estado','created_at', 'updated_at'];
}
