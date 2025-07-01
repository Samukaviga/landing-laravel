<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function fillRegister(){
        return view('pages.fill-register');
    }

    public function congratulations(){
        return view('pages.congratulations');
    }
}
