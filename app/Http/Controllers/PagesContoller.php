<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContoller extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function services(){
        return view('pages.services')->with(
            $data=array('title'=>'Branding', 'services'=>['Web design','Web dev','soft eng']
            ));
    }
    public function contact(){
        return view('pages.contact');
    }
}
