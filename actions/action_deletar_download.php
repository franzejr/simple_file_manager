<?php
	include ("../banco/conecta.php");
	include ("../tools.php");
	//Deletando toda a lista
	$id_usu = $_GET['id_usu'];
	echo $id_usu;
	$comando = "DELETE from download where id_usu=$id_usu;";
	$return_delete = mysql_query($comando) or die(mysql_error());
	alert("Deletado com sucesso!");
	//Redirecionando para a pagina do perfil
	redirect("../layoutA.php?pag=perfil")

?>