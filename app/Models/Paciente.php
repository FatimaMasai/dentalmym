<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class Paciente extends Model
{
    use HasFactory;
    protected $table = "tbl_paciente";
    protected $fillable = ['id','id_persona','alergia','observacion','responsable','antecedentes',
     'recomendado','estado', 'created_at', 'updated_at'];

     public function Persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona', 'id');
    }  
    public function my_update($request)
    {   
        $slug = Str::slug($request->id_persona, '-');
        self::update($request->all() + [
            'slug' => $slug  
        ]);
    }

} 