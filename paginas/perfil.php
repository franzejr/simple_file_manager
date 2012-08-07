<h2>Meu Perfil</h2>
<ul>
	<li>Usuário:<?=$_SESSION['usuario'];?></li>
	<li>Nome:<?=$_SESSION['nome']?></li>
	<li>E-mail:<?=$_SESSION['email']?></li>
</ul>

<h2>Últimos Downloads Efetuados</h2>
	<?php include("ultimos_downloads.php"); ?>