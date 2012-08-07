<h2>Adicionar Categoria</h2>

<link href='contact.css' rel='stylesheet' type='text/css' />
<div id="contato">
	<form method="post" action="actions/action_inserir_categoria.php" enctype="multipart/form-data">
			<div>
				<div>
					<h3>Nome</h3>
				</div>
					<input name="nome" id="nome" type="text" />
			</div>
			
			<div>
				<div>
					<h3>Descrição</h3>
				</div>
				<textarea type="text" name="descricao" id="descricao" ></textarea>
			</div>
		
		<input type="submit" value="Inserir Categoria" />
	</form>
</div>
