<?php

//funcao setlocale

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// os parameotrs %A %B significam dia da semana e mes... existem diversos parametros conforme doumentação do PHP
echo ucwords(strftime("%A %B"));

?>