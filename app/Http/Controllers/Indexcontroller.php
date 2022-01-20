<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function index($new){
        return view('hello',['name'=>$new]);
    }
}
