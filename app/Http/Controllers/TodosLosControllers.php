<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosLosControllers extends Controller
{
    public function hola(){
        return "hola";
    }
    public function index(){
        //return "Bienvenido $nombre";
        return view('index');
    }
}
