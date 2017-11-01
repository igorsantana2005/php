<?php 
require_once('../config.php');
require_once(DBAPI);

$diretoria = null;
$customer = null;

/** Listagem de Clientes **/
function index(){
	global $diretoria;
	$diretoria = find_all('diretoria');
}

/** Cadastro de Clientes **/
function add(){
	
	

	if(!empty($_POST['customer'])){
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

		$customer = $_POST['customer'];
		$customer['dir_data_alteracao'] = $customer['dir_data_criacao'] = $today->format("Y-m-d H:i:s");

		save('diretoria', $customer);
		header('location: index.php');
	}
}

/** Atualização/Edicção de Cliente **/
function edit(){
	$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(isset($_POST['customer'])){

			$customer = $_POST['customer'];
			$customer['dir_data_alteracao'] = $now->format("Y-m-d H:i:s");

			update('diretoria', $id, $customer);
			header('location: index.php');
		} else {
			global $customer;
			$customer = find('diretoria', $id);
		}
	} else {
		header('location: index.php');
	}
}

/** Visualização de um Cliente **/
function view($id = null){
	global $customer;
	$customer = find('diretoria', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

	global $customer;
	$customer = remove('diretoria', $id);

	header('location: index.php');
}

?>