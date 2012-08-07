<meta http-equiv="content-type" 
	content="text/html;charset=utf-8" />
<?php
	include ("../models/usuario.php");
	include ("../dao/usuarioDAO.php");
	include ("../tools.php");

	//Pegando dados da Requisicao

	$nome = $_POST["nome"];
	$apelido = $_POST["apelido"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$endereco = $_POST["endereco"];
	$complemento = $_POST["complemento"];
	$telefone = $_POST["telefone1"];
	$telefone2 = $_POST["telefone2"];
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	$usuario = new Usuario(
	$nome,$apelido,$cpf,$email,$endereco,$complemento,$telefone,$telefone2,$usuario,$senha
	);
	
	try{
		$usuarioDAO = new UsuarioDAO();
		$usuarioDAO->insert($usuario);
		alert("Usuário cadastrado com sucesso!");
		redirect("../index.php");
	}catch(Exception $e){
		echo "exception:". $e;
	}
		
	
?>