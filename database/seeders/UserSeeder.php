<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;   # Sirve para trabajar con Base de datos desde los DB y sus funciones
use Illuminate\Support\Facades\Hash; # Encriptas clave

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name'      => 'Administrador'      ,
                'email'     => 'admin@gmail.com'    ,
                'password'  => Hash::make(12345678) ,
            ],
            [
                'name'      => 'Vitor Corro'        ,
                'email'     => 'vdcorro@gmail.com'  ,
                'password'  => Hash::make(12345678) ,
            ],
            [
                'name'      => 'Daivid Quintero'     ,
                'email'     => 'djquintero@gmail.com',
                'password'  => Hash::make(12345678)  ,
            ]
        ]);
    }
}
