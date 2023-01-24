<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return "varsayılan sayfa" ;   // http://127.0.0.1:8000/users
        return view('users/index') ;   // return view('users.index')
    }
    public function create(){
       // return "kullanıcı formu sayfası" ;    // http://127.0.0.1:8000/users/create
         return view('users/create') ; //  return view('users.create') ;
    }
    public function show(){
        // return "kullanıcı görüntüleme sayfası" ;    // http://127.0.0.1:8000/users/show
        return view('users/show') ;  // return view('users.show') ; 
    }

    
    public function listele(){
        return view('users.listele') ;  // return view('users.show') ; 
    }
    
    public function listele2(){
        $students = ['sinan', 'baran', 'kendal'] ;
        return view('users.listele2', compact('students')) ;  // bu datalar lisatele2 sayfaAINDA KULLANİLABİLECEK; 
    }
    
    public function listele2a(){
        $students = ['sinan', 'baran', 'kendal'] ;
        $class = ['1a', '2c', '3d'] ;
        return view('users.listele2', compact('students','class')) ;  //class arrayi lisatele2a sayfaAINDA 2. bir foreach ile kullabilabilecektir ; 
    }

    public function listele3(){
        $students = ['sinan', 'baran', 'kendal'] ;
        return view('users.listele2')->with('students', $students);  //with('isim', array_name)
    }

    
}
