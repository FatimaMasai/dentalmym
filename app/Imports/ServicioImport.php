<?php

namespace App\Imports;

use App\Models\Servicio;
use App\Models\TipoServicio;
use Maatwebsite\Excel\Concerns\ToModel;

class ServicioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Servicio([
            'nombre' =>$row[0],
            'precio' =>$row[1],
            'created_at' =>$row[2],
        ]);
    }
}
