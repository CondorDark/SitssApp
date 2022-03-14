<?php

namespace App\Http\Controllers;

use App\Models\Travels;
use Illuminate\Http\Request;

class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //

        if ($request->codRoute == null)
        {
            return redirect()->route( 'routes.create' )->with('error', 'Validar Campos');
        }

        $route = $request->except(['_token']);

        $dataTravel = Travels::where('co_travel', $route['codRoute'])->get();

        if ( count( $dataTravel ) > 0 )
        {
            return redirect()->route('routes.index')->with('success','Ruta Ya Se Encuentra Registarda Codigo: '.$dataTravel[0]['co_travel']);
        }

        $travel = Travels::create([
            "co_travel"    => $route['codRoute'],
            "nu_Kilometer" => $route['km']      ,
            "co_origin"    => $route['origin']  ,
            "co_destiny"   => $route['destiny'] ,
        ]);

        return redirect()->route('routes.index')->with('success','Ruta Registarda Satifactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function show(Travels $travels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function edit(Travels $travels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travels $travels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Travels::destroy($id);

        return redirect('/routes')->with('success', 'Ruta Eliminada Satisfactoriamente');
    }
}
