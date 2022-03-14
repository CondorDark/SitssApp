<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\Withouttx_modelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([

            [
               'nu_bus'        => '6100',
               'tx_model'      => 'ZK6122H9',
               'tx_serial'     => 'LZYTATFG4F1056862',
               'nu_place'      => '44'
            ],
            [
                 'nu_bus'       => '6101',
                 'tx_model'     => 'ZK6122H9',
                 'tx_serial'    =>'LZYTATF67F1056905',
                 'nu_place'     =>'44'
            ],

            [
                  'nu_bus'       =>  '6102',
                  'tx_model'     =>  'ZK6122H9',
                  'tx_serial'    => 'LZYTATF69F1056856',
                  'nu_place'     =>  '44'
            ],
            [
                  'nu_bus'       =>'6103',
                  'tx_model'     => 'ZK6122H9',
                  'tx_serial'    =>'LZYTATF65F1034465',
                  'nu_place'     =>'44'
            ],
            [
                  'nu_bus'       =>'6104',
                  'tx_model'     =>'ZK6146H9' ,
                  'tx_serial'    =>'LZYTNTG66F1001963',
                  'nu_place'     =>'52'
            ],
            [
                'nu_bus'         =>'6105',
                'tx_model'       =>'ZK6146H9' ,
                'tx_serial'      =>'LZYTNTG61F1001899',
                'nu_place'       =>'18'
            ],
            [
                'nu_bus'         =>'6106',
                'tx_model'       =>'ZK6146H9' ,
                'tx_serial'      =>'LZYTNTG66F1001901',
                'nu_place'       =>'52'
            ],
            [
                'nu_bus'         =>'6107',
                'tx_model'       =>'ZK6146H9' ,
                'tx_serial'      =>'LZYTNTG65F1001906',
                'nu_place'       =>'52'
            ],
            [
                'nu_bus'         =>'6108',
                'tx_model'       =>'ZK6146H9' ,
                'tx_serial'      =>'LZYTNTG62F1001894',
                'nu_place'       =>'52'
            ],
            [
                'nu_bus'         =>'6109',
                'tx_model'       =>'ZK6146H9',
                'tx_serial'      =>'LZYTNTG6XF1001674',
                'nu_place'       =>'52'
            ],
            [
                'nu_bus'         =>'6110',
                'tx_model'       =>'ZK6146H9',
                'tx_serial'      =>'LZYTNTG66F1001669',
                'nu_place'       =>'52'
            ],
            [
                'nu_bus'         =>'6111',
                'tx_model'       =>'ZK6122H9',
                'tx_serial'      =>'LZYTATF61F1034463',
                'nu_place'       =>'44'
            ],
            [
                'nu_bus'         =>'6112',
                'tx_model'       =>'ZK6122H9',
                'tx_serial'      =>'LZYTATF6XF1034462',
                'nu_place'       =>'44'
            ],
            [
                'nu_bus'         =>'6113',
                'tx_model'       =>'ZK6122H9',
                'tx_serial'      =>'LZYTATF62F1056908',
                'nu_place'       =>'44'
            ],
            [
                'nu_bus'          =>'6114',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF6XG1012236',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6115' ,
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF63G1012238',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6116',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF67G1012243',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6117',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF67F1056855',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6118',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF67G1012257',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6119',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF61G1012268',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6120',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF61G1012271',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6121',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF62G1012277',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6122',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF68G1012283',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6123',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF6XG1012284',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6124',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF62G1012294',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6125',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF65G1012306',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6126',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF69G1012311',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6127',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF68G1012316',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6128',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF63G1012319',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6129',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF6XG1012320',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6130',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF63G1012322',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6131',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF67G1012324',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6132',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF64G1012328',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6133',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATF66G1012329',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6134',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG3G1012174',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6135',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG1G1012237',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6136',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG0G1012245',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6137',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG8G1012249',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6138',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG3G1012272',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6139',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG9G1012275',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6140',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG0G1012276',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6141',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG2G1012280',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6142',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG4G1012281',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6143',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG3G1012282',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6144',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG3G1012286',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6145',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG7G1012288',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6146',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG9G1012292',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6147',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG0G1012293',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6148',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG4G1012300',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6149',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG3G1012305',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6150',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG7G1012307',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6151',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG7G1012310',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6152',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG6G1012315',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6153',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG9G1012325',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6154',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG9G1012326',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6155',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG9G1012327',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6156',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG9G1012328',
                'nu_place'        =>'44'
            ],
            [
                'nu_bus'          =>'6160',
                'tx_model'        =>'ZK6122H9',
                'tx_serial'       =>'LZYTATFG9G1012329',
                'nu_place'        =>'44'
            ]

        ]);
    }
}
