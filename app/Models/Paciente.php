<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = "tbl_paciente";
    protected $fillable = ['id','id_persona','alergia','observacion','responsable','antecedentes',
     'recomendado','estado', 'created_at', 'updated_at'];

     public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona', 'id');
    }

} 