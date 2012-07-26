<?php
session_start();
@include_once("funcoes.php");
if ($_SESSION["status"]!="admin") {
	mensagem("Acesso Negado!");
	redirect("index.php");
}
?>