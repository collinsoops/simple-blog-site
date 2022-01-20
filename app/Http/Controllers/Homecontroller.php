<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index($id){
        return view('home.homepage',['id'=>$id]);
    }
}
