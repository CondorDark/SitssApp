<?php

namespace App\Http\Controllers;

use App\Models\clothingSize;
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

    public function sigesPersonalClothingSize()
    {
        $conn = pg_connect("host=10.20.30.110 port=5432 dbname=db_sitssa_2022 user=postgres password=sitssa2019");

        $result = pg_query($conn, "SELECT cedper, nomper, apeper, talcamper, talzapper, talpanper FROM sno_personal");

        $datas = array();

        while ($row = pg_fetch_assoc($result)) {

            array_push($datas, [
                "id_personal_information" => $row['cedper'],
                "na_personal_information" => $row['nomper'].' '.$row['apeper'],
                "tx_Shirt_Size"           => $row['talcamper'],
                "nu_Footwear_Size"        => $row['talzapper'],
                "nu_Pant_Size"            => $row['talpanper'],
            ]);
        }

        return $datas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $datas = $this->sigesPersonalClothingSize();

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
    public function edit($cedula)
    {
        //
        $conn = pg_connect("host=10.20.30.110 port=5432 dbname=db_sitssa_2022 user=postgres password=sitssa2019");

        $result = pg_query($conn, "SELECT cedper, nomper, apeper, talcamper, talzapper, talpanper FROM sno_personal WHERE cedper = '$cedula' ");

        $user = array();

        $row = pg_fetch_assoc($result);

        array_push($user, [
                "id_personal_information" => $row['cedper'],
                "na_personal_information" => $row['nomper'].' '.$row['apeper'],
                "tx_Shirt_Size"           => $row['talcamper'],
                "nu_Footwear_Size"        => $row['talzapper'],
                "nu_Pant_Size"            => $row['talpanper'],
        ]   );

        return view( 'app.clothingSize.edit', compact( 'user' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clothingSize  $clothingSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cedula)
    {
        //
        $camisa = $request->origin;
        $pantal = $request->nu_pantSize;
        $zapato = $request->nu_footerSize;

        $conn = pg_connect("host=10.20.30.110 port=5432 dbname=db_sitssa_2022 user=postgres password=sitssa2019");

        $result = pg_query($conn, "UPDATE sno_personal SET talcamper = '$camisa', talzapper = '$pantal', talpanper = '$zapato' WHERE cedper = '$cedula' ");

        return redirect('/clothingSize')->with('success', 'Usuario Actualizado Satifactoriamente');;
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
