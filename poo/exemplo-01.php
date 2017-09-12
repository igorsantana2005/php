<?php

	/*
		O que é uma classe? Pensar numa classe como uma caixa que o que importa é o que está dentro dela.
			Exemplo: A classe SQL tem dentro dela variaveis e funções referentes ao SQL... 

		Atributo?
			Mesma coisa que variavel porem com recursos a mais....
				São dados que não mudam, exeplo: tenho um atributo para o usuario do banco, tenho um atributo para a senha e outro aributo para o ip do banco...

		Funções?
			São os metodos....


		Classes = Assuntos que se cria para organizar o codigo... eh um conjunto de atributos e metodos
		Atributos = o que eu preciso armazenar
		Metodos = o que eu preciso executar.

		objeto = um objeto e uma variavel que representa uma classe (esse processo é chamado de instância)

		
	*/

// CRIANDO UMA CLASSE

		class Pessoa {

			public $nome; //Atributo

				public function falar(){ //Metodo... o $this é usado para referenciar um atributo dentro de um metodo!

					return "O meu nome é ".$this->nome;

				}
		}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>