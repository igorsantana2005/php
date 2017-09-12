<?php
//Parametros de funções. Exemplo 01:

function ola($texto = "mundo", $periodo="Bom dia"){


	return "Ola $texto, $periodo </br>";

}

echo ola();
echo ola("","Boa noite");
echo ola("Glacio","Boa tarde");
echo ola("Joao","");
?>
