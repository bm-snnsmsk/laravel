<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Page ;



class Pages extends Controller
{
    public function listele(){
        return view('listele') ;
    }

    public function sayfalar(){
        Page::query()->get() ;
        return view('sayfalar')->with('kisi_sayfalar') ;
    }

    

    

}
