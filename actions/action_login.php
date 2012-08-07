<?php
session_start();
include("../funcoes.php");
confere($_POST, "../index.php");
include("../banco/conecta.php");
$sql = mysql_query("SELECT * FROM $usuario WHERE usuario= '".$_POST[usuario]."' AND senha = '".$_POST[senha]."'" ) or 
die(mysql_error());

if(mysql_num_rows($sql)==0){
	mensagem("Dados Inválidos!");
	redirect("../index.php");
}else{
	mensagem("Logado com sucesso!");
	$_SESSION['status'] = "usuario";
	$_SESSION['nome'] = mysql_result($sql, 0, "nome");
	$_SESSION['email'] = mysql_result($sql, 0, "email");
	$_SESSION['usuario'] = mysql_result($sql, 0, "usuario");
	redirect("../index.php");
}

?>