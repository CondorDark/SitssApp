<?php

namespace App\Http\Controllers;

use App\Models\Safra;
use App\Models\Stations;
use App\Models\Travels;
use App\Models\Units;
use Illuminate\Http\Request;

class SafraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $number= 11.9;

        $exits = array();

        $departures = Safra::where('fe_safra', date('Y-m-d'))->get();

        /* $departures = Safra::where('fe_safra', date('Y-m-d'))
                           ->where('hr_safra', '<=', '3:43:00')->get(); */

        foreach ($departures as $key => $egress) {

            // Ruta
            $route = Travels::where('co_travel', $egress->co_travel)->get(["co_origin", "co_destiny", "nu_Kilometer"])[0];

            // Unidades
            $unit = Units::where('id_unit', $egress->co_unit) ->get(["nu_bus", "nu_place"])[0];

            // Estaciones de las Rutas
            $stationOrigin  = Stations::where('id_station', $route->co_origin )->get(["na_station", "sg_station"])[0];
            $stationDestiny = Stations::where('id_station', $route->co_destiny)->get(["na_station", "sg_station"])[0];

            $time = date("g:i a",strtotime($egress->hr_safra));

            $pos1 = strpos($route->nu_Kilometer, '.');
            $pos2 = strpos($route->nu_Kilometer, ',');

            if ($pos1 === true)
            {
                $nu_Kilometer = number_format($route->nu_Kilometer, 2, '.');
            }
            else
            {
                if ($pos2 === true)
                {
                    $nu_Kilometer = number_format($route->nu_Kilometer, 2, ',');
                }
                else
                {
                    $nu_Kilometer = number_format($route->nu_Kilometer, 2, ',');
                }
            }

            array_push($exits,
                [
                    "id_egress"       => $egress->id_safra,
                    "co_unit"         => $unit->nu_bus,
                    "nu_place"        => $unit->nu_place,
                    "nu_mobilization" => $egress->nu_mobilization,
                    "origin" =>
                    [
                        "na_station" => $stationOrigin->na_station,
                        "sg_station" => $stationOrigin->sg_station,
                    ],
                    "destiny" =>
                    [
                        "na_station" => $stationDestiny->na_station,
                        "sg_station" => $stationDestiny->sg_station,
                    ],
                    "kilometer" => $nu_Kilometer,
                    "fe_exit"   => $egress->fe_safra,
                    "hr_exit"   => $time,
                    "nu_return" => $egress->nu_return,
                ],
            );
        }

        return view( 'app.safra.index', compact( 'exits' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $routers = array();

        $buses = Units::all();

        $routes = Travels::all();

        foreach ($routes as $key => $route) {

            //dd($route);

            $stationOrigin  = Stations::where('id_station', $route->co_origin) ->get(["na_station", "sg_station"])[0];
            $stationDestiny = Stations::where('id_station', $route->co_destiny)->get(["na_station", "sg_station"])[0];

            //dd($stationOrigin->na_station);

            array_push($routers, [
                "co_route" => $route->co_travel,
                "origin"  => [
                    "na_origin" => $stationOrigin->na_station,
                    "sg_origin" => $stationOrigin->sg_station,
                ],
                "destiny"  => [
                    "na_destiny" => $stationDestiny->na_station,
                    "sg_destiny" => $stationDestiny->sg_station,
                ]
            ]);
        }

        // dd($routers);

        return view('app.safra.create', compact( 'buses', 'routers' ) );
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
        $safra = $request->except('_token', 'nu_return');

        Safra::insert([
            'co_travel'       => $safra['rutas'],
            'fe_safra'        => $safra['date'],
            'hr_safra'        => $safra['time'],
            'co_unit'         => $safra['unit'],
            'nu_mobilization' => $safra['mobilization'],
        ]);

        return redirect()->route('safra.index')->with('success','Registro Satifactorio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\safra  $safra
     * @return \Illuminate\Http\Response
     */
    public function show(safra $safra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\safra  $safra
     * @return \Illuminate\Http\Response
     */
    public function edit(safra $safra)
    {
        //
        /* $egress = Employees::findOrFail($id);

        return view( 'app.safra.edit', compact( 'egress' ) ); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\safra  $safra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $return = $request->except(['_token']);

        Safra::where('id_safra', $id)
                                        ->update([
                                            'nu_return' => $return['nu_return'],
                                        ]);

        return redirect()->route('safra.index')->with('success','Retorno Registrado Satisfactoriamente');

        /* $employee = $request->except(['_token', 'Enviar', '_method']);

        if (empty($employee['photo'])) {

            Employees::where('id', $id)->update([
                                            'Nombre'    => $employee['name'],
                                            'Apellido'  => $employee['lastname'],
                                            'Correo'    => $employee['email'],
                                        ]);
        } else {

            if ($request->hasFile('photo')) {

                $employee = Employees::findOrFail($id);

                Storage::delete('public/'.$employee->Foto);

                $employee['photo'] = $request->file('photo')->store('uploads', 'public');
            }

            Employees::where('id', $id)->update([
                                            'Nombre'    => $employee['name'],
                                            'Apellido'  => $employee['lastname'],
                                            'Correo'    => $employee['email'],
                                            'Foto'      => $employee['photo'],
                                        ]);

        }

        $employee = Employees::findOrFail($id);

        return view( 'employees.edit', compact( 'employee' ) ); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\safra  $safra
     * @return \Illuminate\Http\Response
     */
    public function destroy(safra $safra)
    {
        //
        /* $employee = Employees::findOrFail($id);

        if (Storage::delete('public/'.$employee->Foto)) {

            Employees::destroy($id);
        }

        return redirect('/employees'); */
    }
}
