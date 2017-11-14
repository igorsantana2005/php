<?php

// INSERINDO DADOS NO BANCO

	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

	$login = "Jose";
	$password = "123qwe";

	$stmt -> bindParam(":LOGIN", $login);
	$stmt -> bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "Inserido com sucesso";

?>