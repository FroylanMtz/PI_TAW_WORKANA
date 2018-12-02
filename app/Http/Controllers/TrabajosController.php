<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;

class TrabajosController extends Controller
{
    
    public function mostrar(Trabajo $trabajos){

        //$t = $trabajos->all();
        $t = $trabajos->first();

        return view('trabajos', compact('t') );
    
    }

}
