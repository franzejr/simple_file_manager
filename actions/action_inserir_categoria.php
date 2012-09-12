<meta http-equiv="content-type" 
	content="text/html;charset=utf-8" />
	<?php
	include ("../banco/conecta.php");
	include ("../tools.php");

	//Pegando dados da Requisicao

	$nome = $_POST["nome"];
	$descricao = $_POST["descricao"];

	
	$query = "insert into categoria (nome, descricao) values('$nome','$descricao')";
	//echo $query;
	try{
		$query_result = mysql_query($query) or die(mysql_error()); 
		alert("Categoria cadastrada com sucesso!");
		redirect("../index.php");
	}catch(Exception $e){
		echo "exception:". $e;
	}
		
	
?>