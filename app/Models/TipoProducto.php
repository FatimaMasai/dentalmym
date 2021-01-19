<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TipoProducto extends Model
{
    use HasFactory;
    protected $table = "tbl_tipo_producto";
    protected $fillable = ['id','nombre','estado','created_at', 'updated_at'];

    //almacenamiento update
    public function my_update($request)
    {   
        $slug = Str::slug($request->nombre, '-');
        self::update($request->all() + [
            'slug' => $slug  
        ]);
    }

    
}
