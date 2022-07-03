<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index(){
        $hola = "Hello World!! 170430 - Geremy Andre Covarrubias Aguilar ";
        return view("welcome",compact("hola"));
        }
}
