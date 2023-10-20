<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $name = "lzc";
        return view("sites.about")->with('name', $name);
    }

    public function contact(){
        $name = "lzc";
        return view("sites.contact")->with('name', $name);
    }
}
