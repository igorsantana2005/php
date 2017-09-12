<?php

//achar um timestamp de uma data:
	// echo strtotime ("2001/09/11");

// apos achar o timestamp podemos definir a data desse timestamp:
$ts = strtotime ("2001-09-11");

echo date ("l, d/m/Y", $ts);

?>