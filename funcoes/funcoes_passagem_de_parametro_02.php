<?php
//Passagem de Parametros por Referencia. Exemplo 01:

$a = 10;

function trocaValor(&$b){

	$b += 50;

	return $b;

}
//ela recebe o valor da variavel $a e adiciona a funciton fazendo com que ela valha 60;
echo trocaValor($a);
echo "</br>";
//ela soma. 60 + 50 = 110.
echo trocaValor($a);
echo "</br>";
//e a variavel fora da função passa a valer 110 devido a passagem de referencia
echo $a;

?>
