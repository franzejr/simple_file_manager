<?php
include ("../banco/conecta.php");
include ("../models/arquivo.php");
include ("../dao/arquivoDAO.php");
include ("../tools.php");
//Pegando os dados da requisicao

	$nome = $_POST["nome"];
	$descricao = $_POST["descricao"];

//Trabalhando com o Arquivo
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Codigo do Erro: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
	echo "<h2>Dados do Arquivo</h2>";
	echo "Titulo do Arquivo:" .$nome. "<br />";
    echo "Nome: " . $_FILES["file"]["name"] . "<br />";
    echo "Tamanho: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("../uploads/" . $_FILES["file"]["name"]))
      {
     // echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  $target_path = "../uploads/";
	  $target_path = $target_path . basename( $_FILES['file']['name']);
      if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
	    // echo "The file ".  basename( $_FILES['file']['name']). 
	    // 	    " has been uploaded". "<br />";
		} else{
			echo "Houve um erro ao fazer o upload do seu arquivo, por favor, tente novamente!";
		}
      //echo "Gravado em: " . "uploads/" . $_FILES["file"]["name"];
      }
    }
	try{
		echo "TARGET PATH: ".$target_path;
		$novo_path = str_replace("../","",$target_path);
		$query = "INSERT INTO arquivo (nome,caminho,user,descricao) VALUES ('$nome','$novo_path',1,'$descricao')";
		$query_result = mysql_query($query) or die(mysql_error()); 
		alert("Arquivo inserido com sucesso!");
		redirect("../index.php");
	}
	catch(Exception $e){
		echo "exception:". $e;
	}

	
	//TODO
	//Arquivo arquivo = new Arquivo($titulo,$caminho,1,$descricao);
	//ArquivoDAO arquivodao = new ArquivoDAO();
	//arquivodao->insert($nome,$caminho,1,$descricao);

?>