<?php
// Nesse momento a classe cadastro está pegando a extensão da classse cadastro que fica um nivel acima, por isso e utilizado \cadastro.

namespace Cliente;

	class Cadastro extends \Cadastro 
	{
		public function registrarVenda()
		{
			echo "Foi registrado uma venda para o cliente ".$this->getNome();
		}

	}

?>