<?php 
	define('DB_NAME', 'praticaii');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

	if ( !defined('ABSPATH') )
		define('ABSPATH', dirname(__FILE__) . '/');			/** caminho no server para o sistema **/	
	if ( !defined('BASEURL') )		
		define('BASEURL', '/praticaii/');			/** caminho do arquivo de banco de dados **/	
	if ( !defined('DBAPI') )		
		define('DBAPI', ABSPATH . 'inc/database.php');

	define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');	
	define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');


 ?>