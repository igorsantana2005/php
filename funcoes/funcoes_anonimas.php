<?php
//EXERCICIO FUNCOES ANONIMAS:

	function test($callback) {

		//Processo lento

		$callback();

	}

test(function(){

	echo "Terminou";

});

?>