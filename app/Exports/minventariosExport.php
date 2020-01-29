<?php

namespace App\Exports;

use App\Models\minventarios;
use Maatwebsite\Excel\Concerns\FromCollection;

class minventariosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return minventarios::all();
    }
}
