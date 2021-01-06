<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = "tbl_venta";
    protected $fillable = ['id', 'id_paciente','estado', 'created_at', 'updated_at'];

    public function Paciente()
    {
        return $this->belongsTo('App\Models\Paciente', 'id_paciente', 'id'); 
    }
 
    public function Detalle()
    {
        return $this->hasMany('App\Models\Detalle'); 
    }
}
