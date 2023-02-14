<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB ;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    
        DB::table('users')->insert([
            'name' => 'baran şimşek' ,
            'email' => 'info_baran@ctegitim.com' ,
            'password' => md5('222') ,           
        ]);

    }
}
