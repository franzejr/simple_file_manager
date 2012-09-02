<link href='contact.css' rel='stylesheet' type='text/css' />
<div id="contato">
				<h2>Inserindo um Novo Arquivo</h2>
	<form method="post" action="actions/action_inserir_arquivo.php" enctype="multipart/form-data">
			<div>
				<div>
					<h3>Título</h3>
				</div>
					<input name="nome" id="nome" type="text" />
			</div>
			
			<div>
				<div>
					<h3>Categoria</h3>
				</div>
					<select name="categoria" id="categoria">
						<option>sss</option>
						<option>sss</option>
						<option>sss</option>
						<option>sss</option>
					</select>
			</div>
			
			<div>
				<div>
					<h3>Arquivo</h3>
				</div>
				<input type="file" name="file" id="file" />
			</div>
			
			<div>
				<div>
					<h3>Descrição</h3>
				</div>
				<label>Descrição</label> <textarea rows="10" name="descricao" id="descricao" ></textarea>
			</div>
		
		<input type="submit" value="Inserir Arquivo" />
	</form>
</div>
