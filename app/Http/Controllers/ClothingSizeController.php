<?php

namespace App\Http\Controllers;

use App\Models\clothingSize;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class ClothingSizeController extends Controller
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
        $datas = PersonalInformation::all();
        return view( 'app.clothingSize.index', compact( 'datas' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('app.clothingSize.create');
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
     * @param  \App\Models\clothingSize  $clothingSize
     * @return \Illuminate\Http\Response
     */
    public function show(clothingSize $clothingSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clothingSize  $clothingSize
     * @return \Illuminate\Http\Response
     */
    public function edit(clothingSize $clothingSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clothingSize  $clothingSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clothingSize $clothingSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clothingSize  $clothingSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(clothingSize $clothingSize)
    {
        //
    }
}
