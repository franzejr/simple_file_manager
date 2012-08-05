<link href='contact.css' rel='stylesheet' type='text/css' />
<div id="contato">
	<form method="post" action="actions/action_inserir_arquivo.php" enctype="multipart/form-data">
			<legend>Inserindo um Novo Arquivo</legend>
			<div>
				<label>Título para o Arquivo</label> <input name="titulo" id="titulo" type="text" />
			</div>
			<div>
				<label for="file">Filename:</label> <input type="file" name="file" id="file" />
			</div>
		
		<input type="submit" value="Inserir Arquivo" />

	</form>
</div>
