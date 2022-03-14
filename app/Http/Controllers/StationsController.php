<?php

namespace App\Http\Controllers;

use App\Models\Stations;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class StationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stations = Stations::all();

        return view( 'app.routes.station.index', compact( 'stations' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view( 'app.routes.station.create' );
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
        $request->validate([
            'na_station.string' => 'required|min:25|max:255',
            'sg_station.string' => 'required|max:3|min:3',
        ]);

        $safra = $request->except('_token');

        Stations::insert([
            'na_station' => strtoupper($safra['na_station']),
            'sg_station' => strtoupper($safra['sg_station']),
        ]);

        return redirect()->route('stations.index')->with('success','Registro De Estación Cargado Satifactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function show(Stations $stations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit(Stations $stations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stations $stations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Stations::destroy($id);

        return redirect('/stations')->with('success', 'Estación Eliminada Satisfactoriamente');
    }
}
