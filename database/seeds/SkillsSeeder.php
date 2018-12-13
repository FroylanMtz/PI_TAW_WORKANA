<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	
    public function run()
    {
			
		//Datos de prueba para la tabla de categorias
		DB::table('categories')->insert([
			'id' => '1',
			'name' => 'Aplicaciones movil',
			'description' => 'Desarrollo de aplicaciones para multiplataforma'
		]);
		
		DB::table('categories')->insert([
			'id' => '2',
			'name' => 'Aplicaciones web',
			'description' => 'Desarrollo de aplicaciones web'
		]);
		
		DB::table('categories')->insert([
			'id' => '3',
			'name' => 'Aplicaciones de escritorio',
			'description' => 'Desarrollo de aplicaciones para escritorio windows, linux y mac'
		]);
		
		DB::table('categories')->insert([
			'id' => '4',
			'name' => 'Diseño web',
			'description' => 'Diseño y UX para todo tipo de aplicaciones'
		]);
			
			DB::table('categories')->insert([
			'id' => '5',
			'name' => 'Redaccion para sitios',
			'description' => 'Diseño y redaccion de articulos'
		]);
		
	
		
		
    }
}
