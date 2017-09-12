<?php
//Passagem de Parametros por Valor. Exemplo 01:

$a = 10;

function trocaValor($b){

	$b += 50;

	return $b;

}

echo trocaValor($a);
echo "</br>";
echo $a;

?>
