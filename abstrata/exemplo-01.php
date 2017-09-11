<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo 

{
	public function acelerar($velocidade)
	{

		echo "O Veiculo acelerou até :". $velocidade ." KM/H";
	}

	public function frenar($velocidade)
	{

		echo "O Veiculo frenou até :". $velocidade ." KM/H";
	}

	public function trocarMarcha($marcha)
	{

		echo "O Veiculo engatou a marcha :". $marcha ." KM/H";
	}	

}

class DelRey extends Automovel 
{

	public function empurrar()
	{

	}

}


//Não é possivel instanciar uma classe abastrata diretamente, no caso em tela deveremos instanciar a classe DelRey que e uma classe extendida da classe abastrata Automovel. 
$carro = new DelRey();
$carro->acelerar(200);


?>