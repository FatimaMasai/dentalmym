<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
class Doctor extends Model
{
    use HasFactory;
    protected $table = "tbl_doctor";
    protected $fillable = ['id','id_persona','especialidad','estado', 'created_at', 'updated_at'];

     public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona', 'id');
    }
    //almacenamiento update
    public function my_update($request)
    {   
        $slug = Str::slug($request->id_persona, '-');
        self::update($request->all() + [
            'slug' => $slug  
        ]);
    }
}
