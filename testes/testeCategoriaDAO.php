<?php
	include_once("../banco/conecta.php");
	include_once("../models/categoria.php");
	include_once("../dao/categoriaDAO.php");
	
	/*CategoriaDAO */
	
	echo "<h1>Testando a CategoriaDAO</h1>";
	$categoriaDAO = new CategoriaDAO();
	
	//Criando um categoria
	echo "<b>Criando um categoria de teste</b>";
	echo "<pre>";
		$categoria = new categoria(1,"franzejr","franzejr","232323232","franzejr2gmail.com","Rua", "Proximo",323232,23232);
		echo var_dump($categoria);
	echo "</pre>";
	
	//Insert
	echo "<h2>Insert</h2>";
	$categoriaDAO->insert($categoria);
	
	//Update
	echo "<h2>Update</h2>";
	// echo "<b>Modificando o categoria de teste</b>";
	// $categoria->_nome = "franzejr_modificado";
	// echo "<pre>";
	// 	echo var_dump($categoria);
	// echo "</pre>";
	// 
	// $categoriaDAO->update($categoria);
	
	//Delete
	echo "<h2>Delete</h2>";
	//$categoriaDAO->delete($categoria);

	

?>