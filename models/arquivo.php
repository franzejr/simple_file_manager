<?php

class Arquivo{
	public $_id_arq;
	public $_nome;
	public $_caminho;
	public $_user;
	
	function __construct($id_arq,$nome,$caminho,$user){
		this->_id_arq = $id_arq;
		this->_nome = $nome;
		this->_caminho = $caminho;
		this->_user = $user;
		
	}
}

?>