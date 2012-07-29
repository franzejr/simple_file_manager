<?php
	include_once("../banco/conecta.php");
	include_once("../models/usuario.php");
	include_once("../dao/usuarioDAO.php");
	
	/*UsuarioDAO */
	
	echo "<h1>Testando o UsuarioDAO</h1>";
	$usuarioDAO = new UsuarioDAO();
	
	//Criando um usuario
	echo "<b>Criando um usuario de teste</b>";
	echo "<pre>";
		$usuario = new Usuario(1,"franzejr","franzejr","232323232","franzejr2gmail.com","Rua", "Proximo",323232,23232);
		echo var_dump($usuario);
	echo "</pre>";
	
	//Insert
	echo "<h2>Insert</h2>";
	$usuarioDAO->insert($usuario);
	
	//Update
	echo "<h2>Update</h2>";
	// echo "<b>Modificando o usuario de teste</b>";
	// $usuario->_nome = "franzejr_modificado";
	// echo "<pre>";
	// 	echo var_dump($usuario);
	// echo "</pre>";
	// 
	// $usuarioDAO->update($usuario);
	
	//Delete
	echo "<h2>Delete</h2>";
	//$usuarioDAO->delete($usuario);

	

?>