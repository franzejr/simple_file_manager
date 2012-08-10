<?php

function getParameter($var){
	 if (isset($_GET[$var]) ) echo $_GET[$var]; 
}

?>
<link href='contact.css' rel='stylesheet' type='text/css' />
<div id="contato">
				<h2>Alterando um Arquivo</h2>
	<form method="post" action="actions/action_inserir_arquivo.php" enctype="multipart/form-data">
			<div>
				<div>
					<h3>Título</h3>
				</div>
					<input name="nome" id="nome" type="text" value="<?=getParameter('nome');?>" />
			</div>
			
			<div>
				<div>
					<h3>Arquivo</h3>
				</div>
				<input type="file" name="file" id="file" />
				<small>Você pode alterar seu arquivo</small>
			</div>
			
			<div>
				<div>
					<h3>Descrição</h3>
				</div>
				<textarea rows="10" name="descricao" id="descricao" ><?=getParameter('descricao');?></textarea>
			</div>
			<input type="hidden" id="id_arq" name="id_arq">
		<input type="submit" value="Inserir Arquivo" />
	</form>
</div>
