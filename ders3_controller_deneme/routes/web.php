<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

//Route::resource('users',UserController::class) ;
Route::get('listele',[UserController::class, 'listele']) ; 
Route::get('liste',[UserController::class, 'liste']) ; 
Route::get('about',[UserController::class, 'about']) ; // UserController içindeki about function'ını çalıştır
Route::get('persons',[UserController::class, 'persons']) ; // UserController içindeki persons function'ını çalıştır
Route::get('students',[UserController::class, 'students']) ; // UserController içindeki students function'ını çalıştır
Route::get('aylar',[UserController::class, 'aylar']) ; // 

