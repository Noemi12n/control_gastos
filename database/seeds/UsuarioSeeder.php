<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
            'usu_nombre'=>'noemi',
            'usu_apellido'=>'unapucha',
            'usu_telefono'=>'099457861',
            'usu_cedula'=>'1716376270',
            'usu_fecha_nacimiento'=>'2004-08-05',
            'email'=>'noemiunapucha123@gmail.com',
            'password'=>bcrypt('123456789'),
            'created_at'=>date('Y-m-d H:i'),
        ]);
    
    }
}
