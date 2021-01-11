<?php

namespace App\Exports;

use App\Models\Servicio;
use App\Models\TipoServicio;
use Maatwebsite\Excel\Concerns\FromCollection;

class ServicioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Servicio::all();
        return Servicio::select("id","nombre","precio","created_at")->get();
    }
}
