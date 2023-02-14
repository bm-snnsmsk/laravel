<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order ;
use App\Models\User ;

class UserController extends Controller
{
    public function home(){

        User::query()->get();// DB'ye sorgu atma
        return view('home')->with('users'); // gelen bilgilerle view'e git
    }
}
