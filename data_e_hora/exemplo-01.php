<?php

	date_default_timezone_set('America/Sao_Paulo');

	echo date("d/m/Y H:i");

	echo "</br>";

// essa função pega o timestamp (tempo em segundos desde 1970), eu posso fixar uma data la no echo date da linha 5 se eu passar o valor do timestamp como segundo parametro na função date.
	echo time();

?>