<?php
	include("../banco/conecta.php");
	
	/*Configuracoes do webservice */

	$format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; 
	$id_cat = strtolower($_GET['id_cat']);
	
	if (!isset( $_GET["format"]) && !isset( $_GET["id_cat"]) ) {
    		echo "Por favor, coloque algo para pesquisar.";
		}
		
	if (isset( $_GET["format"]) && !isset( $_GET["id_cat"]) ) {
    		$result = mysql_query("SELECT * FROM arquivo");
		}
		
	if (isset( $_GET["format"]) && isset( $_GET["id_cat"]) ) {
    		$result = mysql_query("SELECT * FROM arquivo a, arq_cat ac where a.id_arq = ac.id_arq and ac.id_cat=$id_cat ");
		}
	
	$arquivos = array();
	  if(mysql_num_rows($result) != 0) {
	    while($arquivo = mysql_fetch_assoc($result)) {
	      $arquivos[] = array('arquivo'=>$arquivo);
	    }
	  } 
	
	if($format == 'json') {
	    //header('Content-type: application/json');
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