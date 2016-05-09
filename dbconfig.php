<?php


	$db_host = "localhost";
	$db_name = "dbregistration";
	$db_user = "postgres";
	$db_pass = "root";
	
	try{
		
		$db_con = new PDO("pgsql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>