<?
	session_start();
	include ('funcoes.php');
	include 'seg/usuario.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Trab 1 - Template</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta content='text/html; charset=UTF-8' http-equiv='content-type' /> 
    <link href='A.css' rel='stylesheet' type='text/css' />
    
    
    <script type="text/javascript" src="cookies.js"></script>
    <script type="text/javascript" src="acessibilidade.js"></script>
    <script type="text/javascript">

    //Funcao de inicializacao para saber o cookie
    function init() {
		setContraste();
		increaseFontSize(Cookies['letra']);
	}
	
	window.onload = init; 
   
	var myRequest = new XMLHttpRequest();
	  function callAjax1() {
	  	var url = "arquivos.json";
	  	
		 myRequest.open("GET", url, true);
		 myRequest.onreadystatechange = responseAjax;
		 myRequest.setRequestHeader("Cache-Control", "no-cache");
		 myRequest.send(null);
	  }

	  function callAjax2() {
	  	var url = "arquivosB.json";
	  	
		 myRequest.open("GET", url, true);
		 myRequest.onreadystatechange = responseAjax;
		 myRequest.setRequestHeader("Cache-Control", "no-cache");
		 myRequest.send(null);
	  }

	  function responseAjax() {
		 if(myRequest.readyState == 4) {
		    if(myRequest.status == 200) {
		        result = myRequest.responseText;
		        //alert(result);
		        //console.log(result);
		        var json = JSON.parse(result);
		        //document.getElementById('resultado').innerHTML = json.arquivos.arquivo[0].nome;
		        //writeLine(result);
		        startListagem();
		         for(var i = 0; i < json.arquivo.length; i++){
		        	writeLine(json.arquivo[i].nome,json.arquivo[i].link);
		        }
		       	endListagem();
		        
		        console.log("we made it");
		    } else {
		        console.log( " An error has occurred: " + myRequest.statusText);
		    }
		 }
	  }
	  
	  
	  function startListagem(){
	  	var listagem = 	document.getElementById('listagem');
	  	listagem.innerHTML = "</ul>";
	  }
	  
	  function endListagem(){
	  	var listagem = 	document.getElementById('listagem');
	  	listagem.innerHTML += "</ul>";
	  }
	  
	  function writeLine(nome, link){
	  
	  	var listagem = document.getElementById('listagem');
		var li_node = document.createElement('li');
		li_node.innerHTML += "<span class='icon'></span>"
	
			//Criando um elemento de link
		  	var link_node = document.createElement('a');
		  	var tn = document.createTextNode(nome);
			link_node.appendChild(tn);
		  	link_node.setAttribute("href",link);
	  	
		li_node.appendChild(link_node);

		listagem.appendChild(li_node);
	  	
	  }
	  

    </script>

</head>

<body>
<div id="headerWrapper">
	<h1>Gerenciamento de Arquivos</h1>
</div>

<div id="contentWrapper">
	<? echo $_SESSION['nome']; ?>
	<div id="menu">
		<? include('includes/menu.php') ?>
	</div>
	<? include('includes/content.php') ?>
</div>
<div id="validator">
	<p>
	    <a href="http://validator.w3.org/check?uri=referer"><img
	      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
	</p>
</div>
</body>
</html>
