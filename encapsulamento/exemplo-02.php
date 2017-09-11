<?php

	class Pessoa {
		//public todo mundo ve
		public $nome = "Ramus Ledorf";

		// protegido: mesma classe ou classe estendida se ve
		protected $idade = 48;

		// so na mesma classe se ve
		private $senha = "123456";

		public function verDados(){

			echo $this->nome . "</br>";
			echo $this->idade . "</br>";
			echo $this->senha . "</br>";

		}

	}

	class Programador extends Pessoa {

		public function verDados(){
			echo get_class($this)."</br>";

			echo $this->nome . "</br>";
			echo $this->idade . "</br>";
			//Aqui o metodo já nao retorna a senha porque o atributo senha é private,
			echo $this->senha . "</br>";

		}

	}

$objeto = new Programador();

//echo $objeto -> senha . "</br>";

$objeto ->verDados();


?>