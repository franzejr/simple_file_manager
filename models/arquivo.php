<?php
class Arquivo{
	public $_nome;
	public $_caminho;
	public $_user;
	public $_descricao;
	
	function __construct($nome,$caminho,$user,$descricao){
		$this->_nome = $nome;
		$this->_caminho = $caminho;
		$this->_user = $user;
		$this->_descricao = $descricao;
	}
}

?>