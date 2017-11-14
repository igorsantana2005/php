<?php

// TRANSAÇÃO

	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	//Inicia a transação
	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = ?");

		$id = 2;

	$stmt->execute(array($id));

		//Cancela se der errado
			//$conn->rollback();

		// Confirma se der certo.
			$conn->commit();

	echo "Delete OK";

?>