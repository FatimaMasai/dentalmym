<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;

    protected $table = "tbl_detalle";
    protected $fillable = ['id','id_venta','id_servicio','cantidad','subtotal','estado', 'created_at', 'updated_at'];

    public function Venta()
    {
        return $this->hasOne('App\Models\Venta',  'id', 'id_venta');
    }
    public function Servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'id_servicio');
    }

}
