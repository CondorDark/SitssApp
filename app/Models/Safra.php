<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Safra extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_safra';

    protected $fillable = [
        'co_travel',
        'fe_safra',
        'hr_safra',
        'co_unit',
        'nu_mobilization',
        'nu_return',
    ];

    /* public function excelList()
    {
        $reports = array();

        $recordSafra = Safra::all();

        foreach ($recordSafra as $key => $value)
        {
            // Datos Unidad
            $nu_unidad = Units::where('id_unit', $value->co_unit)->first('nu_bus');

            // Record Unidad Safra
            $recordUnit = Safra::where('co_unit', $value->co_unit)->get();

            // Inicializacion
            $total_ida = 0;
            $total_return = 0;
            $count_return = 0;

            // Bucle para sumatoria
            foreach ($recordUnit as $key => $val)
            {
                // Sumatoria Movilizados Ida
                $nu_movilized_ida = $val->nu_mobilization;
                $total_ida = $total_ida + $nu_movilized_ida;

                // Sumatoria Movilizados Retorno
                $nu_movilized_return = $val->nu_return;
                $total_return = $total_return + $nu_movilized_return;

                // Validamos y sumamos la cantidad de veces que haya retornado
                if($val->nu_return != NULL && $val->nu_return != 0)
                {
                    $count_return = $count_return + 1;
                }
            }

            if (!array_key_exists($nu_unidad->nu_bus, $reports))
            {

                $reports[$nu_unidad->nu_bus] = [
                    "nu_unidad"   => $nu_unidad->nu_bus,
                    "cant_ida"    => $total_ida,
                    "cant_return" => $total_return,
                    "cant_total"  => ($total_ida + $total_return),
                    "cant_exit"   => $recordUnit->count(),

                    "cant_exit_return" => $count_return,
                ];
            }
        }
    } */
}
