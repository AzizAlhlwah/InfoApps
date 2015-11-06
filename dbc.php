<?php
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','infoApp');
	
	$dbc = mysql_connect(DB_HOST,DB_USER,DB_PASS);
		   mysql_select_db(DB_NAME,$dbc);
?>