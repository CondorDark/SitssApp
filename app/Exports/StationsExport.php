<?php

namespace App\Exports;

use App\Models\Stations;
use Maatwebsite\Excel\Concerns\FromCollection;

class StationsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stations::all();
    }
}
