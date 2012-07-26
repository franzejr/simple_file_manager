<?php
session_start();
@include_once("funcoes.php");
if ($_SESSION["status"]!="usuario") {
	mensagem("Acesso Negado!");
	redirect("index.php");
}
?>