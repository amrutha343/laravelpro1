<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloContoller extends Controller
{
    public function index(){
        return view('calc');
     }

     public function add(Request $request){
         $sum=$result= $request->number1+ $request->number2; echo" <br/>";
        return view("sum",['result'=>$sum]);
     }
 }
