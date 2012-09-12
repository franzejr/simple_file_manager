<?
	include("banco/conecta.php");
?>
<link href='contact.css' rel='stylesheet' type='text/css' />
<div id="contato">
				<h2>Inserindo um Novo Arquivo</h2>
	<form method="post" action="actions/action_inserir_arquivo.php" enctype="multipart/form-data" accept-charset="UTF-8">
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
				<?
					$sql = mysql_query("SELECT id_cat, nome FROM categoria") or die(mysql_error());
					for($i=0;$i<mysql_num_rows($sql);$i++){
						$nome = mysql_result($sql, $i, "nome");
						$id_cat = mysql_result($sql,$i,"id_cat");
				?>
						<option><?=$id_cat?>-<?=$nome?></option>
					<? } ?>
					</select>
			</div>
			<div>
				<div>
					<h3>Arquivo</h3>
				</div>
				<input type="file" name="file" id="file" />
				<input type="hidden" name="id_usu" id="id_usu" value="<?=$_SESSION['id_usu']?>" />
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
