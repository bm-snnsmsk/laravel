<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB ;
use App\Models\User ; // artık seeder içinde model ımızı kulanabiliriz

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::query()->truncate(); //1 - öncelikle veritabanını sil
        $datalar = [// 2 -  array seed
            //her [] bir satırı temsil ediyor
            [
                'name'=>"sinan şimşek",
                'email'=>"bm@gmail.com",
                'password'=>bcrypt('123'),//şifre böyle olmalı yoksa giriş yapmayacaktır
            ],
           // [],
            //[],
        ] ;
        // 3 - tekrar query()
        User::query()->insert($datalar);
        // 4 - php artisan db:seed // şimdi bu bilgiler database gider

    }
}
