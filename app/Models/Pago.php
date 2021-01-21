<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $table = "tbl_pago";
    protected $fillable = ['id','id_venta','id_paciente', 'saldoanterior','pago', 'saldo', 'fecha_pago','estado', 'created_at', 'updated_at'];

    public function Venta()
    {
        return $this->belongsTo('App\Models\Venta', 'id_venta', 'id');
    }
}
