<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;
use App\Job;
use App\Category;
use App\User;


class TrabajosController extends Controller
{
    
    public function mostrar(Trabajo $trabajos){
		$usuarios = User::all();
        $trabajos = Job::all();
        return view('trabajos', array('trabajos' => $trabajos, 'usuarios' => $usuarios) );
    
    }
  
    public function mostrarTrabajo($id)
    {	
    	$trabajo = Job::find($id);
    	$usuario = User::find($trabajo->user_id);  
    	
			return view('propuesta', array('trabajo' => $trabajo,'usuario' => $usuario)); 
    }
  
	
	
		public function mostrarFormulario(Category $c){
				//$categorias = $c->all();
				//dd($categorias);	
				return view('publicar_trabajo');
		}
	
    /*METODO PARA AGREGAR TRABAJOS*/
    public function registrarTrabajos(){
			$trabajo = array(
				'titulo' => request('title'),
				'descripcion' => request('description'),
				'minidescripcion' => request('minidescription'),
				'fecha' => request('fecha'),
				'estado' => request('estado'),
				'entrega' => request('dateofend'),
				'categoria' => request("categoria"),
				'subcategoria' => request("subcategoria"),
				'habilidades' => request("habilidades"),
				'tipo' => request("type"),
				'user_id' => auth()->user()->id
			);
			Job::create($trabajo);
			
			return back();
      //$trabajo->id_empleador= request("title");
    }
	
		public function publicarTrabajo(){
				$categorias = Category::all();
				return view('publicar_trabajo', compact('categorias'));
		}
	
		public function elegirPropuesta()
		{
				$idUsuario = request('propuesta');
				$idTrabajo = request('trabajo');
			
				$trabajo = Job::find($idTrabajo);
			
				$trabajo->user_trabajador = $idUsuario;
				$trabajo->estado = 'Elegido';
				$trabajo->save();
			
				return back();

		}
	
		public function escribirOpinion()
		{
			
		}

}
