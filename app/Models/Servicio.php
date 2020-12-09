<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = "tbl_servicio";
    protected $fillable = ['id','id_tipo_servicio','nombre','precio','estado', 'created_at', 'updated_at'];

     public function TipoServicio()
    {
        return $this->belongsTo('App\Models\TipoServicio', 'id_tipo_servicio', 'id');
    }
}
