<?php

namespace App\Http\Controllers;

use App\Models\Haul;
use App\Models\Stations;
use App\Models\Travels;
use Illuminate\Http\Request;

class HaulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('app.haul.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $routes = array();
        $resorts = array();

        $travels = Travels::all();

        $stations = Stations::all();

        foreach ($stations as $key => $stations) {

            array_push($resorts, [
                "id_station" => $stations['id_station'],
                "na_station" => $stations['na_station'],
                "sg_station" => $stations['sg_station'],
            ]);
        }

        foreach ($travels as $key => $travel) {

            $id_stationOrigin  = $travel->co_origin;
            $id_stationDestiny = $travel->co_destiny;

            $stationOrigin  = Stations::where('id_station', $id_stationOrigin) ->get(["na_station", "sg_station"])[0];
            $stationDestiny = Stations::where('id_station', $id_stationDestiny)->get(["na_station", "sg_station"])[0];

            array_push($routes, [
                "co_travel"    => $travel->co_travel,
                "origin" => [
                    "na_station" => $stationOrigin['na_station'],
                    "sg_station" => $stationOrigin['sg_station']
                ],
                "destiny" => [
                    "na_station" => $stationDestiny['na_station'],
                    "sg_station" => $stationDestiny['sg_station']
                ],
            ]);
        }

        return view( 'app.haul.create', compact( 'routes', 'resorts' ) );
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

        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Haul  $haul
     * @return \Illuminate\Http\Response
     */
    public function show(Haul $haul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Haul  $haul
     * @return \Illuminate\Http\Response
     */
    public function edit(Haul $haul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Haul  $haul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Haul $haul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Haul  $haul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Haul $haul)
    {
        //
    }
}
