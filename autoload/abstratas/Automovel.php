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

?>