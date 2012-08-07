<?
/*
* Arquivo DAO
*/

class ArquivoDAO{

	function insert($nome,$caminho,$user,$descricao)
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