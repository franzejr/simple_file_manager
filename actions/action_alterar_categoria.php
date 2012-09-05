<?php
	include ("../banco/conecta.php");
	include ("../tools.php");
	//Pegando os dados da requisicao

	$nome = $_POST["nome"];
	$descricao = $_POST["descricao"];
	$id_cat = $_POST["id_cat"];

	try{
		$query = "UPDATE categoria SET descricao='$descricao', nome='$nome' where id_cat=$id_cat;";
		
		$query_result = mysql_query($query) or die(mysql_error()); 
		alert("Categoria alterada com sucesso!");
		redirect("../index.php");
	}
	catch(Exception $e){
		echo "exception:". $e;
	}
?>