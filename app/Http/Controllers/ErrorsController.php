<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    public function get404Page(){
        return view('errors.404');
    }
    public function get403Page(){
        return view('errors.403');
    }
     public function get505Page(){
        return view('errors.500');
    }
}
