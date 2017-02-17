<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mulController extends Controller
{
    public function index(){
    return view('mul');
    }

 public function mul(Request $request){
         $product=$result= $request->number1* $request->number2; echo" <br/>";
        return view("product",['result'=>$product]);
     }
}
