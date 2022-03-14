<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use App\Models\Stations;
use App\Models\Travels;
use Illuminate\Http\Request;

class RoutesController extends Controller
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

        $routes = array();

        $travels = Travels::all();

        foreach ($travels as $key => $travel) {

            $id_stationOrigin  = $travel->co_origin;
            $id_stationDestiny = $travel->co_destiny;

            $stationOrigin  = Stations::where('id_station', $id_stationOrigin) ->get(["na_station", "sg_station"])[0];
            $stationDestiny = Stations::where('id_station', $id_stationDestiny)->get(["na_station", "sg_station"])[0];

            array_push($routes, [
                                    "id_travel"    => $travel->id_travel,
                                    "co_travel"    => $travel->co_travel,
                                    // "nu_Kilometer" => $travel->km,
                                    "origin" => [
                                        "na_station" => $stationOrigin['na_station'],
                                        "sg_station" => $stationOrigin['sg_station']
                                    ],
                                    "destiny" => [
                                        "na_station" => $stationDestiny['na_station'],
                                        "sg_station" => $stationDestiny['sg_station']
                                    ],
                                ]
            );
        }

        return view( 'app.routes.routes.index', compact( 'routes' ) )->with('success', 'Registro de Ruta Satifactorio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stations = Stations::all();

        return view('app.routes.routes.create', compact( 'stations' ) );
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
     * @param  \App\Models\Routes  $routes
     * @return \Illuminate\Http\Response
     */
    public function show(Routes $routes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Routes  $routes
     * @return \Illuminate\Http\Response
     */
    public function edit(Routes $routes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Routes  $routes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Routes $routes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Routes  $routes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Routes $routes)
    {
        //
    }
}
