<?
	//Iniciando uma sessao para ja logar o usuario apos ele se cadastrar
	session_start();
	$_SESSION['status'] = "usuario";

	//Pegando as variaveis do formulario de cadastro
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone1 = $_POST['telefone1'];

	$_SESSION['nome'] = $nome;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Parabéns!</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta content='text/html; charset=UTF-8' http-equiv='content-type' /> 
    <link href='A.css' rel='stylesheet' type='text/css' />
    
</head>

<body>
<div id="headerWrapper">
	<h1>Gerenciamento de Arquivos</h1>
</div>

<div id="contentWrapper">
	<div id="menu">
		
	</div>
	<div>
		<h1>Seu cadastro passou com sucesso ;-) </h1>
<? include('includes/saudacao.php'); ?>
		<h5>Nome: <?=$nome ?></h5>
		<h5>CPF: <?=$cpf ?></h5>
		<h5>Telefone: <?=$telefone1 ?></h5>
	</div>
		<a href="inicio.php"> Clique Aqui para entrar na Aplicação</a>

</div>
<div id="validator">
	<p>
	    <a href="http://validator.w3.org/check?uri=referer"><img
	      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
	</p>
</div>
</body>
</html>
