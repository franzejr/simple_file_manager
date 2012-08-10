<?php
	include ("../banco/conecta.php");
	include ("../tools.php");
	
	$id_arq = $_GET['id_arq'];
	$id_usu = $_GET['id_usu'];
	
	$comando = "SELECT nome,caminho,descricao FROM arquivo where id_arq=$id_arq;";
	$sql = mysql_query($comando) or die(mysql_error());
	
	if(mysql_num_rows($sql)==0){
		echo "Nao foi encontrado!";
		alert("Nao foi encontrado o arquivo com esse id");
	}else{
		$nome = mysql_result($sql,0,"nome");
		$caminho =  mysql_result($sql,0,"caminho");
		$descricao = mysql_result($sql,0,"descricao");

		//Inserindo na lista de visualizacao dos downloads com o id do usuario atual.
		$verificacao = "SELECT * from download where id_arq=$id_arq and id_usu=$id_usu;";
		$verificacao_result = mysql_query($verificacao);
		//Se esse arquivo ainda nao foi visualizado por esse usuario, entao podemos grava-lo
		if(mysql_num_rows($verificacao_result)==0){
			$comando = "INSERT into download (id_arq,id_usu) values($id_arq,$id_usu);";
			$sql_insert = mysql_query($comando) or die(mysql_error());
		}
		redirect("../layoutA.php?pag=visualizar_arquivo&nome=$nome&descricao=$descricao&caminho=$caminho");
	}

?>