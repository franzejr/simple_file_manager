<?
	include ("../banco/conecta.php");
	include ("../tools.php");
	$id_arq = $_GET["id_arq"];
	
	$query = "delete from arquivo where id_arq=$id_arq";
	//echo $query;
	echo "Deletando o seu arquivo...";
	$query_result = mysql_query($query) or die(mysql_error()); 
	
	alert("Arquivo deletado com sucesso!");
	redirect("../index.php");

?>
