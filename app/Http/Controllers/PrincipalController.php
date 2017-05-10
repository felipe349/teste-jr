<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Principal extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function enviarDados(){
        
    }
}
