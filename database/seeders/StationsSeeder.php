<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['5 DE JULIO'               , '5JU'],
            ['ACARIGUA'                 , 'ACA'],
            ['AEROPUERTO MAIQUETIA'     , 'MQT'],
            ['ANACO'                    , 'ACO'],
            ['BARINAS'                  , 'BRS'],
            ['BARQUISIMETO'             , 'BTO'],
            ['BISCUCUY'                 , 'BCC'],
            ['BOCONO'                   , 'BNO'],
            ['CALABOZO'                 , 'CAL'],
            ['CAPITOLIO'                , 'CAP'],
            ['CARIACO'                  , 'CRC'],
            ['CARUPANO'                 , 'CON'],
            ['CASANAY'                  , 'CAY'],
            ['CAUCAGUA'                 , 'CAU'],
            ['CAUCAGUA 1'               , 'CA1'],
            ['CAUCAGUA 2'               , 'CA2'],
            ['CAUCAGUITA'               , 'CAG'],
            ['CIUDAD CARIBIA'           , 'CCA'],
            ['CORO'                     , 'COR'],
            ['CUMANA'                   , 'CUM'],
            ['EL CALLAO'                , 'ECL'],
            ['EL DORADO'                , 'EDO'],
            ['EL TEJERO'                , 'ETJ'],
            ['EL TIGRE'                 , 'ETG'],
            ['EL VIGIA'                 , 'EVI'],
            ['GATO NEGRO'               , 'TGN'],
            ['GUANARE'                  , 'GRE'],
            ['GUARENAS'                 , 'GUA'],
            ['GUASIPITA'                , 'GPI'],
            ['GUATIRE'                  , 'GUT'],
            ['GUIRIA'                   , 'GRA'],
            ['HIGUEROTE'                , 'HIG'],
            ['KM88'                     , 'K88'],
            ['LA VICTORIA'              , 'LVI'],
            ['LAS BRISAS'               , 'LBR'],
            ['LOS TEQUES'               , 'LTQ'],
            ['LOS VALLES DEL TUY'       , 'VDT'],
            ['MARACAIBO'                , 'MBO'],
            ['MARACAY'                  , 'MCY'],
            ['MATURIN'                  , 'MAT'],
            ['MERIDA'                   , 'MER'],
            ['PLAYA EL CARIBE'          , 'PEC'],
            ['PLAZA SUCRE'              , 'PSU'],
            ['PUERTO AYACUCHO'          , 'PAY'],
            ['PUERTO LA CRUZ'           , 'PLC'],
            ['PUERTO ORDAZ'             , 'PTO'],
            ['PUERTO PIRITU'            , 'PPI'],
            ['PUNTA DE MATA'            , 'PDM'],
            ['PUNTO FIJO'               , 'PFI'],
            ['RIO CHICO'                , 'RCH'],
            ['SAN CARLOS'               , 'SNC'],
            ['SAN CRISTOBAL'            , 'SCR'],
            ['SAN FELIPE'               , 'SFL'],
            ['SAN FELIX'                , 'SFB'],
            ['SAN FERNANDO DE APURE'    , 'SFA'],
            ['SAN JUAN DE LOS MORROS'   , 'SJM'],
            ['SANTA ELENA DE UAIREN'    , 'SEU'],
            ['TEMBLADOR'                , 'ETD'],
            // ['TERMINAL CATIA LA MAR'    , 'CLM'],
            ['TERMINAL DE ORIENTE'      , 'TDO'],
            ['TERMINAL HUGO CHAVEZ'     , 'THC'],
            ['TERMINAL LA BANDERA'      , 'TLB'],
            ['TRUJILLO'                 , 'TRU'],
            ['TUCUPITA'                 , 'TPT'],
            ['TUMEREMO'                 , 'TUM'],
            ['UPATA'                    , 'UPT'],
            ['VALENCIA'                 , 'VAL'],
            ['VALERA'                   , 'VRA'],
            ['VALLE DE LA PASCUA'       , 'VDP'],
            // ['VARGAS'                   , 'VAR'],
            ['ZOOLOGICO'                , 'ZOO'],
            ['LA CALIFORNIA'            , 'LAC'],
            ['ZONA RENTAL'              , 'ZRT'],
            ['CALIFORNIA'               , 'CLF'],
            ['LOS CORTIJOS'             , 'LCJ'],
            ['PARQUE WARAIRA REPANO'    , 'PWR'],
            // ['LA GUAIRA'                , 'LGR'],
            ['CARIPITO'                 , 'CRO'],
            ['AEROPUERTO MAIQUETIA'     , 'AIM'],
            ['TERMINAL LA ZORRA'        , 'TLZ'],
            // ['CARIBE'                   , 'CRB'],
            ['CUCHIVANO'                , 'CHV'],
        );

        foreach ($data as $key => $value) {

            $name = $value[0];
            $sigl = $value[1];

            DB::table('stations')->insert([
                'na_station' => $name,
                'sg_station' => $sigl,
            ]);
        }
    }
}
