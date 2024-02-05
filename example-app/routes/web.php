<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MyAuth;
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

Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::get('/logout', [MyAuth::class, 'logout_process']);
Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/register', [MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){
    // auth first
});

Route::get('/my-controller',[MyController::class, 'index']);

Route::get('/my-controller',[MyController::class, 'index']);
Route::get('/my-controller2','App\Http\Controllers\MyController@index');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3','MyController@index');
});

Route::resource('my-controller4', MyController::class);


Route::get('/', function () {
    return 'hi';
});
Route::get('/test', function () {
    return view("myroutes");
});

Route::get('/my-routes', function () {
    $data = ['val_a' => 'Hello World'];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);
});

Route::post('/my-routes', function (Request $req) {
    $data['myinput'] = $req -> input ('myinput');
    return view('myroutes', $data);
});

Route::get('/my-multable', function () {
    return view('myfolder.mypage');
});

Route::post('/my-multable', function (Request $req) {
    $data['number'] = $req -> input ('multiply');
    return view('myfolder.mymultable', $data);
});

Route::get('/homepage', function() {
    return view('layouts.home');
});



