<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\UserController ; // oluşturduğumuz UserController controller'ı web.php'e dahil et

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

// ilk get 
// Route::get('/', function () {
//     return view('welcome');
// });



/// --------------------------- 
Route::redirect('/','anasayfa'); // burdaki aşağıdaki kodla aynı sonbucu döndürür
Route::get('/',function () {
    return view('anasayfa');   // views klasörüne git
   // return 'anasayfaya hoşgeldiniz... 2023' ;
});
/// ---------------------------

/// ---------------------------
Route::get('/kurumsal',function () {
    return view('kurumsal');   // views klasörüne git
});
Route::get('/referanslar',function () {
    return view('referanslar');   // views klasörüne git
});
Route::get('/iletisim',function () {
    return view('iletisim');   // views klasörüne git
});
/// ---------------------------

/// ---------------------------
Route::prefix('sayfalar')->group(function(){
    Route::get('/birincisayfa', function(){
        return view('birincisayfa'); // sayfalar/birincisayfa
    }) ;
    Route::get('/ikincisayfa', function(){
        return view('ikincisayfa'); // sayfalar/ikincisayfa
    }) ;
    Route::get('/ucuncusayfa', function(){
        return view('ucuncusayfa'); // sayfalar/ucuncusayfa
    }) ;
    Route::fallback(function(){
        return "birincisayfa, ikincisayfa, ucuncusayfa harici bir sayfa"; // sayfalar/asasa
    }) ;
}) ;
/// ---------------------------

/// ---------------------------
Route::fallback(function(){
    return view('404'); // olmayan_bir_sayfa_adi
}) ;
/// ---------------------------





