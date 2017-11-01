<?php 
require_once('../config.php');
require_once(DBAPI);

$servidor = null;
$customer = null;

/** Listagem de Clientes **/
function index(){
	global $servidor;
	$servidor = find_all('servidor');
}

/** Cadastro de Clientes **/
function add(){
	
	

	if(!empty($_POST['customer'])){
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

		$customer = $_POST['customer'];
		$customer['serv_data_alteracao'] = $customer['serv_data_criacao'] = $today->format("Y-m-d H:i:s");

		save('servidor', $customer);
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
			$customer['serv_data_alteracao'] = $now->format("Y-m-d H:i:s");

			update('servidor', $id, $customer);
			header('location: index.php');
		} else {
			global $customer;
			$customer = find('servidor', $id);
		}
	} else {
		header('location: index.php');
	}
}

/** Visualização de um Cliente **/
function view($id = null){
	global $customer;
	$customer = find('servidor', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

	global $customer;
	$customer = remove('servidor', $id);

	header('location: index.php');
}


?>