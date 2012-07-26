<?
class usuario{
	var $id_usu;
	var $nome;
	var $apelido;
	var $cpf;
	var $email;
	var $endereco;
	var $complemento;
	var $telefone;
	var $telefone2;
	
	function __construct(
		$id_usu,
		$nome,
		$apelido,
		$cpf,
		$email,
		$endereco,
		$complemento,
		var $telefone,
		$telefone2) 
	{
	    $this->$id_usu = $id_usu;
		$this->$nome = $nome;
		$this->$apelido = $nome;
		$this->$cpf = $cpf;
		$this->$email = $email;
		$this->$endereco = $endereco;
		$this->$complemento = $complemento;
		$this->$telefone = $telefone;
		$this->$telefone2 = $telefone2;
	}
	
	
}
?>