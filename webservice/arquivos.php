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
	
	/*Configuracoes do webservice */

	$format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; 
	$result = mysql_query("SELECT * FROM arquivo");
	
	$arquivos = array();
	  if(mysql_num_rows($result) != 0) {
	    while($arquivo = mysql_fetch_assoc($result)) {
	      $arquivos[] = array('arquivo'=>$arquivo);
	    }
	  } 
	
	if($format == 'json') {
	    header('Content-type: application/json');
		echo json_encode($arquivos);
	  }
		else {
		    header('Content-type: text/xml');
		    echo '<arquivos>';
		    foreach($arquivos as $index => $arquivo) {
		      if(is_array($arquivo)) {
		        foreach($arquivo as $key => $value) {
		          echo '<',$key,'>';
		          if(is_array($value)) {
		            foreach($value as $tag => $val) {
		              echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
		            }
		          }
		          echo '</',$key,'>';
		        }
		      }
		    }
		    echo '</arquivos>';
		  }
		
	/* Disconnect from the db */
	@mysql_close($connect);
		
?>