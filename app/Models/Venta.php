<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = "tbl_venta";
    protected $fillable = ['id', 'id_paciente', 'id_tipoventa', 'total', 'estado', 'created_at', 'updated_at'];

    public function Paciente()
    {
        return $this->belongsTo('App\Models\Paciente', 'id_paciente', 'id');
    }

    public function Tipoventa()
    {
        return $this->belongsTo('App\Models\TipoVenta', 'id_tipoventa', 'id');
    }

    public function Detalle()
    {
        return $this->hasMany('App\Models\Detalle');
    }

    public function Pagos()
    {
        return $this->hasMany('App\Models\Pago', 'id_venta');
    }
}
