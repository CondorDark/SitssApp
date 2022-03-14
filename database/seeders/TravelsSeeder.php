<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('travels')->insert([
            [
                'co_travel'     => 'UC00001',
                'co_origin'     => 26,
                'co_destiny'    => 77,
                'nu_Kilometer'  => 36,
            ],
            [
                'co_travel'     => 'UC00002',
                'co_origin'     => 26,
                'co_destiny'    => 60,
                'nu_Kilometer'  => 43,
            ],
            [
                'co_travel'     => 'UC00003',
                'co_origin'     => 26,
                'co_destiny'    => 18,
                'nu_Kilometer'  => 17,
            ],
            [
                'co_travel'     => 'UC00004',
                'co_origin'     => 26,
                'co_destiny'    => 76,
                'nu_Kilometer'  => 25,
            ],
            [
                'co_travel'     => 'UC00005',
                'co_origin'     => 59,
                'co_destiny'    => 72,
                'nu_Kilometer'  => 8,
            ],
            [
                'co_travel'     => 'UC00006',
                'co_origin'     => 59,
                'co_destiny'    => 35,
                'nu_Kilometer'  => 11.90,
            ],
            [
                'co_travel'     => 'UC00007',
                'co_origin'     => 59,
                'co_destiny'    => 73,
                'nu_Kilometer'  => 18,
            ],
            [
                'co_travel'     => 'UC00008',
                'co_origin'     => 59,
                'co_destiny'    => 32,
                'nu_Kilometer'  => 130,
            ],
            [
                'co_travel'     => 'UC00009',
                'co_origin'     => 59,
                'co_destiny'    => 50,
                'nu_Kilometer'  => 146.70,
            ],
            [
                'co_travel'     => 'UC00010',
                'co_origin'     => 59,
                'co_destiny'    => 14,
                'nu_Kilometer'  => 87,
            ],
            [
                'co_travel'     => 'UT00001',
                'co_origin'     => 71,
                'co_destiny'    => 74,
                'nu_Kilometer'  => 2.65,
            ],
            [
                'co_travel'     => 'IOR00001',
                'co_origin'     => 59,
                'co_destiny'    => 4,
                'nu_Kilometer'  => 495,
            ],
            [
                'co_travel'     => 'IOR00002',
                'co_origin'     => 59,
                'co_destiny'    => 13,
                'nu_Kilometer'  => 509,
            ],
            [
                'co_travel'     => 'IOR00003',
                'co_origin'     => 59,
                'co_destiny'    => 11,
                'nu_Kilometer'  => 494,
            ],
            [
                'co_travel'     => 'IOR00004',
                'co_origin'     => 59,
                'co_destiny'    => 12,
                'nu_Kilometer'  => 544,
            ],
            [
                'co_travel'     => 'IOR00005',
                'co_origin'     => 59,
                'co_destiny'    => 20,
                'nu_Kilometer'  => 400,
            ],
            [
                'co_travel'     => 'IOR00006',
                'co_origin'     => 59,
                'co_destiny'    => 24,
                'nu_Kilometer'  => 573.90,
            ],
            [
                'co_travel'     => 'IOR00007',
                'co_origin'     => 59,
                'co_destiny'    => 40,
                'nu_Kilometer'  => 514,
            ],
            [
                'co_travel'     => 'IOR00008',
                'co_origin'     => 59,
                'co_destiny'    => 75,
                'nu_Kilometer'  => 556,
            ],
            [
                'co_travel'     => 'IOR00009',
                'co_origin'     => 59,
                'co_destiny'    => 45,
                'nu_Kilometer'  => 349.30,
            ],
            [
                'co_travel'     => 'IOR00010',
                'co_origin'     => 59,
                'co_destiny'    => 46,
                'nu_Kilometer'  => 840.60,
            ],
            [
                'co_travel'     => 'IOR00011',
                'co_origin'     => 59,
                'co_destiny'    => 47,
                'nu_Kilometer'  => 277,
            ],
            [
                'co_travel'     => 'IOR00012',
                'co_origin'     => 59,
                'co_destiny'    => 48,
                'nu_Kilometer'  => 463,
            ],
            [
                'co_travel'     => 'IOR00013',
                'co_origin'     => 59,
                'co_destiny'    => 54,
                'nu_Kilometer'  => 850.60,
            ],
            [
                'co_travel'     => 'IOR00014',
                'co_origin'     => 59,
                'co_destiny'    => 58,
                'nu_Kilometer'  => 621,
            ],
            [
                'co_travel'     => 'IOR00015',
                'co_origin'     => 59,
                'co_destiny'    => 63,
                'nu_Kilometer'  => 730,
            ],
            [
                'co_travel'     => 'IOR00016',
                'co_origin'     => 59,
                'co_destiny'    => 65,
                'nu_Kilometer'  => 853.70,
            ],
            [
                'co_travel'     => 'IOC00001',
                'co_origin'     => 39,
                'co_destiny'    => 5,
                'nu_Kilometer'  => 392,
            ],
            [
                'co_travel'     => 'IOC00002',
                'co_origin'     => 39,
                'co_destiny'    => 6,
                'nu_Kilometer'  => 267.60,
            ],
            [
                'co_travel'     => 'IOC00003',
                'co_origin'     => 39,
                'co_destiny'    => 7,
                'nu_Kilometer'  => 388,
            ],
            [
                'co_travel'     => 'IOC00004',
                'co_origin'     => 39,
                'co_destiny'    => 8,
                'nu_Kilometer'  => 425.50,
            ],
            [
                'co_travel'     => 'IOC00005',
                'co_origin'     => 39,
                'co_destiny'    => 19,
                'nu_Kilometer'  => 334,
            ],
            [
                'co_travel'     => 'IOC00006',
                'co_origin'     => 39,
                'co_destiny'    => 27,
                'nu_Kilometer'  => 315,
            ],
            [
                'co_travel'     => 'IOC00007',
                'co_origin'     => 39,
                'co_destiny'    => 61,
                'nu_Kilometer'  => 133.40,
            ],
            [
                'co_travel'     => 'IOC00008',
                'co_origin'     => 39,
                'co_destiny'    => 38,
                'nu_Kilometer'  => 493.40,
            ],
            [
                'co_travel'     => 'IOC00009',
                'co_origin'     => 39,
                'co_destiny'    => 41,
                'nu_Kilometer'  => 708.80,
            ],
            [
                'co_travel'     => 'IOC00010',
                'co_origin'     => 39,
                'co_destiny'    => 49,
                'nu_Kilometer'  => 413,
            ],
            [
                'co_travel'     => 'IOC00011',
                'co_origin'     => 39,
                'co_destiny'    => 52,
                'nu_Kilometer'  => 771.40,
            ],
            [
                'co_travel'     => 'IOC00012',
                'co_origin'     => 39,
                'co_destiny'    => 55,
                'nu_Kilometer'  => 324,
            ],
            [
                'co_travel'     => 'IOC00013',
                'co_origin'     => 39,
                'co_destiny'    => 62,
                'nu_Kilometer'  => 448.70,
            ],
            [
                'co_travel'     => 'IOC00014',
                'co_origin'     => 39,
                'co_destiny'    => 67,
                'nu_Kilometer'  => 470.30,
            ],
            [
                'co_travel'     => 'IOC00015',
                'co_origin'     => 61,
                'co_destiny'    => 5,
                'nu_Kilometer'  => 577,
            ],
            [
                'co_travel'     => 'IOC00016',
                'co_origin'     => 61,
                'co_destiny'    => 6,
                'nu_Kilometer'  => 377.40,
            ],
            [
                'co_travel'     => 'IOC00017',
                'co_origin'     => 61,
                'co_destiny'    => 7,
                'nu_Kilometer'  => 484,
            ],
            [
                'co_travel'     => 'IOC00018',
                'co_origin'     => 61,
                'co_destiny'    => 8,
                'nu_Kilometer'  => 543.20,
            ],
            [
                'co_travel'     => 'IOC00019',
                'co_origin'     => 61,
                'co_destiny'    => 19,
                'nu_Kilometer'  => 528.40,
            ],
            [
                'co_travel'     => 'IOC00020',
                'co_origin'     => 61,
                'co_destiny'    => 27,
                'nu_Kilometer'  => 431,
            ],
            [
                'co_travel'     => 'IOC00021',
                'co_origin'     => 61,
                'co_destiny'    => 38,
                'nu_Kilometer'  => 763,
            ],
            [
                'co_travel'     => 'IOC00022',
                'co_origin'     => 61,
                'co_destiny'    => 41,
                'nu_Kilometer'  => 900,
            ],
            [
                'co_travel'     => 'IOC00023',
                'co_origin'     => 61,
                'co_destiny'    => 49,
                'nu_Kilometer'  => 614,
            ],
            [
                'co_travel'     => 'IOC00024',
                'co_origin'     => 61,
                'co_destiny'    => 52,
                'nu_Kilometer'  => 957,
            ],
            [
                'co_travel'     => 'IOC00025',
                'co_origin'     => 61,
                'co_destiny'    => 55,
                'nu_Kilometer'  => 405.40,
            ],
            [
                'co_travel'     => 'IOC00026',
                'co_origin'     => 61,
                'co_destiny'    => 62,
                'nu_Kilometer'  => 558.50,
            ],
            [
                'co_travel'     => 'IOC00027',
                'co_origin'     => 61,
                'co_destiny'    => 67,
                'nu_Kilometer'  => 649,
            ],
            [
                'co_travel'     => 'IOC00028',
                'co_origin'     => 61,
                'co_destiny'    => 39,
                'nu_Kilometer'  => 133,
            ],
            [
                'co_travel'     => 'IOC00029',
                'co_origin'     => 61,
                'co_destiny'    => 66,
                'nu_Kilometer'  => 176,
            ],
            [
                'co_travel'     => 'IOC00030',
                'co_origin'     => 61,
                'co_destiny'    => 34,
                'nu_Kilometer'  => 98,
            ],
            [
                'co_travel'     => 'UCP00001',
                'co_origin'     => 26,
                'co_destiny'    => 42,
                'nu_Kilometer'  => 35.50,
            ],
            [
                'co_travel'     => 'UCP00002',
                'co_origin'     => 59,
                'co_destiny'    => 78,
                'nu_Kilometer'  => 104,
            ],
        ]);
    }
}
