<?
	session_start();
	include 'seg/usuario.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Trab 1 - Template B</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta content='text/html; charset=UTF-8' http-equiv='content-type' /> 
    <link href='base.css' rel='stylesheet' type='text/css' />
    <link href='contact.css' rel='stylesheet' type='text/css' />
    <link href='validacao.css' rel='stylesheet' type='text/css' />
    <script src="validator.js" type="text/javascript" ></script>
    <script type="text/javascript" src="cookies.js"></script>
    <script type="text/javascript">
    	

    	function naoEhVoce(){
			Cookies.erase('user');
			Cookies.create('semUser' ,"-1",7);  
			alert("sem usuario");
    	}


    	function comUsuario(){
    	  document.getElementById('saudacao').innerHTML = "<li><a href='#'>";
    	  document.getElementById('saudacao').innerHTML += Cookies['user'];
		  document.getElementById('saudacao').innerHTML += "<li><a href='inicio.php' onClick='naoEhVoce()' >Não é você?</a></li>"; 
		}

		function semUsuario(){
		  document.getElementById('saudacao').innerHTML = "<li><a href='inicio.php' onClick='naoEhVoce()' >Sem usuário</a></li>"; 
		}

   	//Funcao de inicializacao para saber o cookie
    function init() {
    	if(Cookies['user'] == undefined ){
    		Cookies.create('user',"Sem User",7);
    		semUsuario();

    	}else{
    		document.getElementById('user').value =  "<?=$_SESSION['nome']; ?>";
			Cookies.create('user', document.getElementById('user').value , 7);
			comUsuario();		
    	}
		
	}
	
	window.onload = init; 
    </script>	
</head>

<body>
<div id="headerWrapper">
	<h1>Gerenciamento de Arquivos</h1>

</div>

<input type="hidden" id="user" />
<div id="contentWrapper">
	<div id="menu">
		<? include('includes/menu.php'); ?>
	</div>
	  			<? include('paginas/inicial.php'); ?>
	  			<br/><br/><br/><br/><br/>
	  			
<div id="validacao"></div>
</div>

<div id="validator">
	<p>
	    <a href="http://validator.w3.org/check?uri=referer"><img
	      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
	</p>
</div>
</body>
</html>
	
