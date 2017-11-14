<?php

	$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS02;ConnectionPooling=0", "sa", "123qwe.");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();


	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//var_dump($result);

	foreach ($result as $row) {

	foreach ($row as $key => $value) {
		echo "<strong>".$key."</strong>".$value."<br>";
	}

	echo "============================================<br>";
}

?>