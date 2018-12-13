<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Opinion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function mostrarUsuarios()
		{
			$usuarios = User::all();
			$categorias = Category::all();
			
			return view('freelancers', array('usuarios' => $usuarios, 'categorias' => $categorias) );
		
		}
	
    #funcion para mostrar el perfil del freelancer
    public function mostrarPerfilFreelancer($id){

		$usuarios = User::all();	
        $usuario= User::find($id);
		$categoria = DB::table('categories')->where('id', $usuario->category )->first();
        $trabajos = DB::table('jobs')->where('user_trabajador', $usuario->id)->get();
		$opiniones = Opinion::all();
		
		$totalTrabajos = count($trabajos);
		
		$totalPuntos = 0.0; 
			
		foreach($opiniones as $o){
			$totalPuntos = $totalPuntos + $o->ranking;
		}
		
		if($totalTrabajos == 0){
			$rankingUsuario = 0;
		}else{
			$rankingUsuario = $totalPuntos / $totalTrabajos;
		}
		
		
		
		
		//print($proyectosTerminados);
		//print_r($opiniones[0]->decripcion);
		return view('perfilFreelancer', array('usuarios' => $usuarios ,'usuario' => $usuario, 'categoria' => $categoria, 'trabajos' => $trabajos , 'opiniones' => $opiniones, 'totalTrabajos' => $totalTrabajos, 'rankingUsuario' => $rankingUsuario ) ); 
    
	}
	
    #funcion para mostrar el perfil del Cliente
    public function mostrarPerfilEmpresa($id){
        //$id = Auth::user()->id;
        $usuario= User::find($id);
        return view('perfilEmpresa')->with('usuario',$usuario); 
    }
}

