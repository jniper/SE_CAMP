<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvar = "Hello World!";

    function _construct() //MyController
    {

    }

    public function index(){
        $data = ['val_a' => 'Hello World'];
        $data['val_b'] = "Laravel";
        return view('layouts.home');
        // return view('welcome');
    }

    public function store(Request $req){
        $data['myinput'] = $req -> input ('myinput');
        return view('myroutes', $data);
    }
}
