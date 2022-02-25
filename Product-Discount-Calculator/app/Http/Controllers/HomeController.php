<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function home(){
        echo "Hello Word";
    }
    public function login(Request $request){
        dd($request->input('description'),$request->input('price'),$request->input('discountPercent'));
    }
}
