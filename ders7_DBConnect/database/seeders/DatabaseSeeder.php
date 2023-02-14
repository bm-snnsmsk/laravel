<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        DB::table('users')->truncate();  // seeder ilk çalıştığında sorun olmayacak ama sonrasındaki seed çalıştırmasında da sorun olmaması için tablo boşaltılır sonra yeniden seed çalıştrılır
        $this->call([UserSeeder::class]) ; // UserSeed isimli seeder'daki bilgileri de eklesin diye

        DB::table('users')->insert([
            'name' => 'emine şimşek' ,
            'email' => 'info22@ctegitim.com' ,
            'password' => md5('123') ,
        ]);


    }
}
