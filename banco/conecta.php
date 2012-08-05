<?php
	/* CONFIGURACOES DO BANCO 
		Coloque as configuracoes abaixo de acordo com o seu MySQL
	*/
	$usuario = "usuario";
	$host = "localhost";
	$bd = "trab3_franzejr";
	$user = "root";
	$password = "";
	
	
	/* CONECTANDO AO BANCO */
	$connection = mysql_connect($host, $user,$password);
	
	if (!($connection)){
			die("Error: ". mysql_error());
	}
	mysql_set_charset('utf8',$connection); //Setting the utf-8 on the database
		
	$bd_connect = mysql_select_db($bd, $connection); //rf services
	if (!($bd_connect)){
		die("Error: ". mysql_error());
	}
		
?>	