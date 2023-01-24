<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
      return "<h1>index sayfası</h1>" ;
   }
   public function listele(){
      return "<h1>listeleme sayfası</h1>" ;
   }
   public function liste(){
      return view('users.liste'); 
   }
   public function about(){
      return view('users.about'); 
   }
   public function persons(){
        $person = ['sinan','emine','tuba','baran'] ;
      return view('users.persons',compact('person')); 
   }
   public function students(){
        $person = ['sinan','emine','tuba','baran'] ;
        $bday = ['silopi','silopi','silopi','silopi'] ;
      return view('users.kisiler',compact('person','bday')); 
   }
   public function aylar(){
      //  $person = ['sinan','emine','tuba','baran'] ;
        $aylar = ['ocak','subat','mart','nisan'] ;
      return view('users.aylar')->with('aylar',$aylar); 
   }
}
