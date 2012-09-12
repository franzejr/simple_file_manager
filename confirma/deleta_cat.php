<?
	include ("../banco/conecta.php");
	include ("../tools.php");
	$id_cat = $_GET["id_cat"];
	
	$query = "delete from categoria where id_cat=$id_cat";
	//echo $query;
	echo "Deletando a sua categoria...";
	$query_result = mysql_query($query) or die(mysql_error()); 
	
	alert("Categoria deletada com sucesso!");
	redirect("../index.php");
?>