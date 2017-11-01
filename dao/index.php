<?php

require_once("config.php");

/* Exemplo 01
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

*/

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

/* Carrega uma lista de usuários buscando pelo login
$lista = Usuario::getList();
echo json_encode($lista);
*/

/* Carrega os usuários de acordo com a o procurado.
$search = Usuario::search("ba");
echo json_encode($search);
*/

//Carrrega um usuario usando o login e a senha:
//$usuario = new Usuario();
//$usuario->login("barbara", "5412");
//echo $usuario;

//Carrega somente os usuários que possuem o 3 na senha:
$senhasx = Usuario::searchpwd("3");
echo json_encode($senhasx);


?>