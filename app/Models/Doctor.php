<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = "tbl_doctor";
    protected $fillable = ['id','id_persona','especialidad','estado', 'created_at', 'updated_at'];

     public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona', 'id');
    }
}
