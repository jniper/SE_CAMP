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
    return 'hi';
});
Route::get('/test', function () {
    return view("myroutes");
});

// Route::get('/my-routes', function () {
//     $data = ['val_a' => 'Hello World'];
//     $data['val_b'] = "Laravel";
//     return view('myfolder.mypage',$data);
// });

// Route::post('/my-routes', function (Request $req) {
//     $data['myinput'] = $req -> input ('myinput');
//     return view('myroutes', $data);
// });

Route::get('/my-multable', function () {
    return view('myfolder.mypage');
});

Route::post('/my-multable', function (Request $req) {
    $data['number'] = $req -> input ('multiply');
    return view('myfolder.mymultable', $data);
});

?>
