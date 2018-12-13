<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Proposal;
use App\Trabajo;
use App\Job;
use App\Category;
use App\User;

class PropuestasController extends Controller
{
    public function registrarPropuesta()
    {
        $data = array(
            'detalles' => request('propuesta'),
            'cobro' => request('cobro'),
            'total' => request('cobro')+(request('cobro')*.10),
            'cosServicio' => request('cobro')*.10,
            'entrega' => request('entrega'),
            'user_id' => auth()->user()->id,
						'id_trabajo' => request('IdTrabajo') 
            
        );

        Proposal::create($data); 
        
        return redirect('/trabajos');
    }
	#FUNCION PARA MOSTRAR LAS PROPUESTAS
	public function mostrarPropuestas(){
		$id = Auth::user()->id;#id del usuario actual(session)
		$user=User::find($id);
		#$propuesta=Proposal::find($id->user_id);#busca en la tabla prposal el id del usuario actual
		$propuesta=Proposal::where('user_id', $id)->get();
		$trabajo=Job::all();
		
		
		return view("/propuestas",array('usuarios'=>$user,'propuestas'=>$propuesta,'trabajos'=>$trabajo));
		
	}
	

}
