<?
	include ("../banco/conecta.php");
	include ("../tools.php");
	$id_arq = $_GET["id_arq"];
	
	//Ha uma restricao em arquivo, pois a tabela arq_cat usa arquivo.
	//Precisamos deletar primeiro o que ha em arq_cat para depois deletarmos o arquivo
	mysql_query("delete from arq_cat where id_arq=$id_arq") or die(mysql_error()); 
	$query = "delete from arquivo where id_arq=$id_arq";
	//echo $query;
	echo "Deletando o seu arquivo...";
	$query_result = mysql_query($query) or die(mysql_error()); 
	
	alert("Arquivo deletado com sucesso!");
	redirect("../index.php");

?>
