<?php

namespace App\Http\Controllers;

use App\User;
use App\Skill;
use App\Category;
use App\Job;
use App\Proposal;
use App\Opinion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class AdminController extends Controller
{
    
  
    public function mostrarTrabajosEmpleador()
    {
        return view('home');
    }
    
    public function mandarPropuesta()
    {
      return view('propuesta');
    }
  
  
    public function mostrarTrabajosFreelancer()
    {
		$id = Auth::user()->id;
		$trabajos = DB::table('jobs')->where('user_trabajador', $id)->get();
		$categorias = Category::all();
    $propuestas = Proposal::all();
		$usuarios = User::all();
		$opiniones = Opinion::all();
		
		//print_r($propuestas->id);
		return view('trabajos_freelancer', array('trabajos' => $trabajos, 'categorias' => $categorias, 'propuestas' => $propuestas, 'usuarios' => $usuarios, 'opiniones' => $opiniones));
    }
  
  
    public function mostrarPropuestas()
    {
        return view('propuestas');
    }
  
    public function mostrarPerfil()
    {
				  
		
        $id = Auth::user()->id;
			
        $usuario = User::find($id);
		$categorias = Category::all();
		
		//$user = DB::table('users')->where('name', 'John')->first();
		
		/*DB::table('skill_user')->insert([
			'id' => 10001,
			'user_id' => 1000,
			'skill_id' => 1
		]);
		
		$users = DB::table('users')->get();*/
				
        return view('perfil', array('usuario' => $usuario, 'categorias' => $categorias )); 
    }
  
        #EDITAR USUARIO
    public function update($id){
		
      	$usuario= User::find($id);
      	$usuario->firstname=request('firstname');
      	$usuario->lastname=request('lastname');
		$usuario->about=request('about');
	  	$usuario->phone=request('phone');
	  	$usuario->category=request('category');
	  	$usuario->salary=request('salary');
		$usuario->acerca=request('acerca');
		$usuario->skills=request('skills');
     	$usuario->save();
      	return back(); 
			
		print_r($datos);
	}
	
	public function config(){
		
		$usuario = User::find(auth()->user()->id);
		$usuario->privacity = request('privacity');
		$usuario->save();
		
		return back();
		
	}
	
	public function updateImage(){
		
		if(Input::hasFile('file')){
			
			$file = Input::file('file');
			$file->move('images', auth()->user()->id . '.' . $file->getClientOriginalExtension());
			echo '';
			
			$usuario= User::find(auth()->user()->id);
			$usuario->photo = auth()->user()->id . '.' . $file->getClientOriginalExtension();
			$usuario->save();
			
			return back();
		}

		
	}

  
    public function mostrarConfiguracion()
    {
		$usuario = User::find(auth()->user()->id);
        return view('configuracion', compact('usuario') );
    }
	
		public function terminarProyecto()
		{	
				$idTrabajo = request('idTrabajo');
				$trabajo = Job::find($idTrabajo);
				$trabajo->estado = 'Finalizado';
				$trabajo->save();
			
				return back();
		}
	
	
	public function escribirOpinion()
	{
		$idEmpleado = request('idEmpleado');
		$idEmpleador = Auth::user()->id;
		$idTrabajo = request('idTrabajo');
		$descripcion = request('descripcion');
		$ranking = request('ranking');
		$fecha = request('fecha');
		
		$opinion = array(
			'id_empleado' => $idEmpleado,
			'id_empleador' => $idEmpleador,
			'id_proyecto' => $idTrabajo,
			'decripcion' => $descripcion,
			'ranking' => $ranking,
			'fecha' => $fecha
		);
		
		Opinion::create($opinion); 
        
		return back();
		
		
	}
    
}
