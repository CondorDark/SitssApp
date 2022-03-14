<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\Safra;
use App\Models\Units;

use App\Exports\StationsExport;
use App\Exports\SafraExport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;

use PDF;


class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view( 'app.reports.index' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generar(Request $request)
    {
        if ($request->typeDocument == 'pdf')
        {
            return$this->pdf($request->date, $request->time1, $request->time2);
        }
        else
        {
            return $this->excel();
        }
    }

    public function pdf($date, $time1, $time2)
    {
        $reports = array();
        $recordSafra = '';

        $date1 = date($date.' '.$time1.':00', time());
        $date2 = date($date.' '.$time2.':00', time());

        if ($time2 == null) {
            if ($time1 == null) {
                $recordSafra = Safra::get()->where('fe_safra', date($date));
            }
            else
            {
                $recordSafra = Safra::get()->where('fe_safra', date($date))
                                           ->where('hr_safra', date($time1));
            }
        } else {
            $recordSafra = Safra::where('fe_safra', date($date))->whereBetween('hr_safra', [$date1, $date2])
                                                                ->get();
        }

        foreach ($recordSafra as $key => $value)
        {
            // Datos Unidad
            $nu_unidad = Units::where('id_unit', $value->co_unit)->first('nu_bus');

            // Record Unidad Safra
            $recordUnit = Safra::where('co_unit', $value->co_unit)->get();

            // Inicializacion
            $total_ida    = 0;
            $total_return = 0;
            $count_return = 0;

            // Bucle para sumatoria
            foreach ($recordUnit as $key => $val)
            {
                // Sumatoria Movilizados Ida
                $nu_movilized_ida = $val->nu_mobilization;
                $total_ida        = $total_ida + $nu_movilized_ida;

                // Sumatoria Movilizados Retorno
                $nu_movilized_return = $val->nu_return;
                $total_return        = $total_return + $nu_movilized_return;

                // Validamos y sumamos la cantidad de veces que haya retornado
                if($val->nu_return != NULL && $val->nu_return != 0) { $count_return = $count_return + 1; }
            }

            if (!array_key_exists($nu_unidad->nu_bus, $reports)) {

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

        // return $pdf->stream();   # Mostrar en pantalla
        // return $pdf->download(); # Descargar
        // PDF::loadView();         # Lee HTML y lo carga desde una plantilla al documento
        // PDF::loadHtml();         # Imprime HTML Directo

        $pdf = \PDF::loadView( 'app.reports.pdf.safraDiaria', compact( 'reports' ) );

        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new SafraExport, 'safra.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
