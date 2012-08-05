<?php
class Usuario{
	public $_nome;
	public $_apelido;
	public $_cpf;
	public $_email;
	public $_endereco;
	public $_complemento;
    public $_telefone;
	public $_telefone2;
	public $_usuario;
	public $_senha;
	
	function __construct(
		$nome,
		$apelido,
		$cpf,
		$email,
		$endereco,
		$complemento,
		$telefone,
		$telefone2,
		$usuario,
		$senha) 
	{
		$this->_nome = $nome;
		$this->_apelido = $apelido;
		$this->_cpf = $cpf;
		$this->_email = $email;
		$this->_endereco = $endereco;
		$this->_complemento = $complemento;
		$this->_telefone = $telefone;
		$this->_telefone2 = $telefone2;
		$this->_usuario = $usuario;
		$this->_senha = $senha;
	}
	
	
}
?>