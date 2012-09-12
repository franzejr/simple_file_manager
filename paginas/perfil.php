<h2>Meu Perfil</h2>
<ul>
	<li>Usuário:<?=$_SESSION['usuario'];?></li>
	<li>ID:<?=$_SESSION['id_usu'];?></li>
	<li>Nome:<?=$_SESSION['nome']?></li>
	<li>E-mail:<?=$_SESSION['email']?></li>
</ul>

<h2>Últimos Downloads Visualizados</h2>
	<a href="actions/action_deletar_download.php?id_usu=<?=$_SESSION['id_usu'];?>">Deletar toda Lista</a>
	<?php include("ultimos_downloads.php"); ?>

<br/><br/>
<h2>Arquivos favoritos</h2>
	<a href="actions/action_deletar_favorito.php?id_usu=<?=$_SESSION['id_usu'];?>">Deletar toda Lista</a>
	<?php include("favoritos.php"); ?>