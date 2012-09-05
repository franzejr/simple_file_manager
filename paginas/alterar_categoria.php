<?php

function getParameter($var){
	 if (isset($_GET[$var]) ) echo $_GET[$var]; 
}

?>
<link href='contact.css' rel='stylesheet' type='text/css' />
<div id="contato">
				<h2>Alterando uma Categoria</h2>
	<form method="post" action="actions/action_alterar_categoria.php">
			<div>
				<div>
					<h3>Nome</h3>
				</div>
					<input name="nome" id="nome" type="text" value="<?=getParameter('nome');?>" />
			</div>
			
			<div>
				<div>
					<h3>Descrição</h3>
				</div>
				<textarea rows="10" name="descricao" id="descricao" ><?=getParameter('descricao');?></textarea>
			</div>
			<input type="hidden" id="id_cat" name="id_cat" value="<?=getParameter('id_cat');?>" />
		<input type="submit" value="Inserir Arquivo" />
	</form>
</div>
