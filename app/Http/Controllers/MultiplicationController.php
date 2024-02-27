<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function index(){
        $multi = 0;
        return view("multiplication")->with('multi',$multi);
    }
    public function simpleMultiplication(Request $request){
        $multi = $request -> a * $request -> b;
        return view("multiplication")->with('multi',$multi);
    }
}
