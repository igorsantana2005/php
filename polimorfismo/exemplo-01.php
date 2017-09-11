<?php

abstract class Animal 
{

	public function falar()
	{

		return "Som";
	}

	public function mover()
	{

		return "Anda";
	}
}

	class Cachorro extends Animal 
	{

		public function falar()
		{
			return "Late";
		}

	}

class Gato extends Animal
{

	public function falar()
	{
		return "Mia";
	}

}

class Passaro extends Animal
{

	public function falar()
	{
		return "Canta";
	}

	public function mover()
	{
		return "Voa e " . parent::mover();
	}

}




$pluto = new Cachorro();
echo $pluto->falar()."</br>";
echo $pluto->mover()."</br>";
echo "</br>";

$mya = new Gato();
echo $mya->falar()."</br>";
echo $mya->mover()."</br>";
echo "</br>";

$kelly = new Passaro();
echo $kelly ->falar()."<br>";
echo $kelly ->mover()."<br>";
echo "</br>"
?>