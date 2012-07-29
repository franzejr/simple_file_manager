<?
/*
* Usuario DAO
*/

include_once("../banco/conecta.php");

class UsuarioDAO{
	
	function insert($usuario)
	{
			try{
				$query = "INSERT INTO usuario (id_usu, nome,apelido,cpf,email,endereco,complemento,telefone,telefone2) VALUES ($usuario->_id_usu,'$usuario->_nome','$usuario->_apelido','$usuario->_cpf','$usuario->_email','$usuario->_endereco','$usuario->_complemento',$usuario->_telefone,$usuario->_telefone2)";
				$query_result = mysql_query($query) or die(mysql_error());
			}
			catch(Exception $e){
				echo "exception:". $e;
			}
			
	}
	
	function update($usuario){
		try{
			$query = "UPDATE usuario SET id_usu=$usuario->_id_usu, nome='$usuario->_nome',apelido='$usuario->_apelido',cpf='$usuario->_cpf',email='$usuario->_email',endereco='$usuario->_endereco',complemento='$usuario->_complemento',telefone=$usuario->_telefone,telefone2=$usuario->_telefone2 WHERE id_usu=$usuario->_id_usu";
			echo $query;
			$query_result = mysql_query($query) or die(mysql_error());
		}
		catch(Exception $e){
			echo "exception:". $e;
		}
	}
	
	function delete($usuario){
		try{
			$query = "DELETE FROM usuario WHERE id_usu=$usuario->_id_usu";
			$query_result = mysql_query($query) or die(mysql_error());
		}
		catch(Exception $e){
			echo "exception:". $e;
		}
	}
}
?>