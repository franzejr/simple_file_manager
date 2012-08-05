<?
/*
* Arquivo DAO
*/
include_once("../banco/conecta.php");
class ArquivoDAO{

	function insert($arquivo)
	{
			try{
				$query = "INSERT INTO usuario (nome,caminho,user,descricao) VALUES ('$arquivo->_nome','$arquivo->_caminho','$arquivo->_user','$arquivo->_descricao')";
				$query_result = mysql_query($query) or die(mysql_error());
			}
			catch(Exception $e){
				echo "exception:". $e;
			}		
	}
	
	function update(){
		
	}
	
	function delete(){
		
	}
	
}
?>