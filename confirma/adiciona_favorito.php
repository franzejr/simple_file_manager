<?
	include ("../banco/conecta.php");
	include ("../tools.php");
	$id_arq = $_GET["id_arq"];
	$id_usu = $_GET["id_usu"];
	
	$query = "insert into favorito(id_arq,id_usu) values($id_arq,$id_usu)";
	//echo $query;
	echo "Adicionando como favorito...";
	$query_result = mysql_query($query) or die(mysql_error()); 
	
	alert("Arquivo favoritado com sucesso!");
	redirect("../index.php");

?>
