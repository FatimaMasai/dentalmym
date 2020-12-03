<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    use HasFactory;
    protected $table = "tbl_tipo_servicio";
    protected $fillable = ['id','nombre','estado','created_at', 'updated_at'];
}
