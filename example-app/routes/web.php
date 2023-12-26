<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/my-routes', function () {
//     echo "<h1> My Route Page</h1>";
// });

Route::get('/my-routes', function () {
    return view('myfolder.mypage');
});

// Route::get('/my-routes', function () {
//     return view('myroutes');
// });

Route::get('/my-routes', function () {
    $data = ['val_a' => 'Hello World'];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);
});

Route::post('/my-routes', function (Request $req) {
    $data['myinput'] = $req -> input ('myinput');
    return  view('myroutes', $data);
});
