<?php
session_start();
include("../funcoes.php");


if($_POST['usuario'] =='teste' && $_POST['senha']=="teste"){
	
	$_SESSION['nome'] = "Teste";
	$_SESSION['senha'] = teste;
	$_SESSION['status'] = "usuario";
	redirect("../inicio.php");
	
}

//Para adicionar outros usuarios basta trocar ou inserir esse elseif abaixo
else if($_POST['usuario'] =='teste2' && $_POST['senha']=="teste2"){
	$_SESSION['usuario'] = "teste2";
	$_SESSION['senha'] = "teste2";
	$_SESSION['status'] = "usuario";
}
else{
	alert("Usuário inválido!");
}

