<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\Categoria;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('CategoriaTableSeeder');
	}


	
}

class CategoriaTableSeeder extends Seeder {
	 	
		public function run() {

			Categoria::create(['nome' => 'ELETRONICO']);
			Categoria::create(['nome' => 'ACESSORIOS']);
			Categoria::create(['nome' => 'HARDWARE']);
			Categoria::create(['nome' => 'CANECAS']);
		}
}