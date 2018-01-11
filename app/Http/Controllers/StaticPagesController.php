<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return view('staticpages.home');
    }

    public function about(){
        return view('staticpages.about');
    }

    public function help(){
        return view('staticpages.help');
    }
}
