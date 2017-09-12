<?php
//Passagem de Parametros por Referencia. Exemplo 01:

$pessoa = array(
		'nome'=>'Joao',
		'idade'=>20
	);

// NOTA QUE O & ELE PASSA O VALOR POR REFERENCIA, FAZENDO COM QUE A PESSOA TENHA SOMADA O VALOR DA REF INICIAL + O VALOR DO IF.. E ELE ASSUME DENTRO DO ARRAY QUE JOAO PASSOU A TER 30 ANOS... O QUE NAO ACONTECE CASO SE TIRE O &... ELE VAI ASSUMIR 30 ANOS NO IF MAS NO ARRAY CONTINUARA COM O VALOR INICIAL.
foreach ($pessoa as &$value) {

	if (gettype($value) === 'integer') $value += 10;

	echo $value."</br>";


}

print_r($pessoa);

?>
