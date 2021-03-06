<?php
	
	/** o nome do banco **/
	define('DB_NAME','missaodepen');

	/** usuario do banco **/
	define('DB_USER','root');

	/** senha do banco de dados **/
	define('DB_PASSWORD',''); 

	/** nome do host de banco de dados **/
	define('DB_HOST','localhost');

	/** caminho absoluto para pasta do sistema **/
	if(!defined('ABSPATH'))
		define('ABSPATH', dirname(__FILE__).'/');

	/** caminho no server para o sistema **/
	if(!defined('BASEURL'))
		define('BASEURL','/');

	/** caminho do arquivo de banco de dados **/
	if(!defined('DBAPI'))
		define('DBAPI', ABSPATH . '/inc/database.php');

	/** caminho dos templates de header e footer **/
	define('HEADER_TEMPLATE',ABSPATH . 'inc/header.php');
	define('FOOTER_TEMPLATE',ABSPATH . 'inc/footer.php');
?>