<?
	include("funcoes.php");
	session_start();
	setcookie("usuario", "Franzé Jr.", time()+3600);
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
</head>

<body>
<div id="headerWrapper">
	<h1>Gerenciamento de Arquivos</h1>

</div>

<div id="contentWrapper">
	<div id="menu">
		<h1>Menu</h1>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="indexA.php">Layout A</a></li>
			<li><a href="indexB.php">Layout B</a></li>

			<li><a href="#">Contato</a></li>
		</ul>
			<div id="banner">
		
	</div>
	</div>
					<?
						
						if ($_SESSION[status] == "usuario") { 
							redirect("layoutA.php"); 
						}
						else { 
							include("formularios/login.php"); 
							}		
					?>
	  				
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
	
