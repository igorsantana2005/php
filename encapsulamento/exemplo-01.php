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

$objeto = new Pessoa();

//echo $objeto -> senha . "</br>";

$objeto ->verDados();


?>