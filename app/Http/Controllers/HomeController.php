<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Category;
use App\Proposal;
use App\User;
use App\Opinion;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$id = Auth::user()->id;
		$trabajos = DB::table('jobs')->where('user_id', $id)->get();
		$categorias = Category::all();
        $propuestas = Proposal::all();
		$usuarios = User::all();
		$opiniones = Opinion::all();
		
		//print_r($propuestas->id);
		return view('home', array('trabajos' => $trabajos, 'categorias' => $categorias, 'propuestas' => $propuestas, 'usuarios' => $usuarios, 'opiniones' => $opiniones)  );
    }
  
  
}







