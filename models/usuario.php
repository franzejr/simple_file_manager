<?php
class Usuario{
	public $_id_usu;
	public $_nome;
	public $_apelido;
	public $_cpf;
	public $_email;
	public $_endereco;
	public $_complemento;
    public $_telefone;
	public $_telefone2;
	
	function __construct(
		$id_usu,
		$nome,
		$apelido,
		$cpf,
		$email,
		$endereco,
		$complemento,
		$telefone,
		$telefone2) 
	{
	    $this->_id_usu = $id_usu;
		$this->_nome = $nome;
		$this->_apelido = $nome;
		$this->_cpf = $cpf;
		$this->_email = $email;
		$this->_endereco = $endereco;
		$this->_complemento = $complemento;
		$this->_telefone = $telefone;
		$this->_telefone2 = $telefone2;
	}
	
	
}
?>