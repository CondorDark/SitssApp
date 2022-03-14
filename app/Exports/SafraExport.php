<?php

namespace App\Exports;

use App\Models\Safra;
use App\Models\Units;

use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Support\Facades\DB;

class SafraExport implements FromView
{
    public function view(): View
    {
        return view('app.reports.excel.safraDiaria', [
            'reports' => $users = DB::table('safras')->join('units', 'safras.co_unit', '=', 'units.id_unit')
                                                     ->select('safras.id_safra'         ,
                                                              'safras.fe_safra'         ,
                                                              'safras.hr_safra'         ,
                                                              'safras.nu_mobilization'  ,
                                                              'safras.nu_return'        ,
                                                              'units.nu_bus'            ,
                                                              'units.nu_place')->get()  ,
        ]);
    }
}
