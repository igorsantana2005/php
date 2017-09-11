<?php
//Interfaces são requisitos que o php obriga a um sistema ter quando declarados... ou seja o código só poderá rodar caso tenha aquelas determinadas interfaces declaradas...:

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo 
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


$carro = new Civic();

$carro->trocarMarcha(1);

?>