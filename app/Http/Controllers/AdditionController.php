<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionController extends Controller
{
    public function index(){
        $sum = 0;
        return view("addition")->with('sum',$sum);
    }
    public function additionSimple(Request $request){
        $sum = $request -> a + $request -> b;
        return view("addition")->with('sum',$sum);
    }
}
