<link href='contact.css' rel='stylesheet' type='text/css' />
<?php
	include ("banco/conecta.php");
	include ("dao/arquivoDAO.php");
	function getParameter($var){
		 if (isset($_GET[$var]) ) echo $_GET[$var]; 
	}
?>
<h2>Buscar Arquivos</h2>
<div id="contato">
	<form action="?pag=buscar_arquivos" method="get">
		<div>
			<div>
				<b>Título</b>
			</div>
			<input type="text" name="nome" id="nome" value="<?php getParameter('nome'); ?>"/>
		</div>
		
		<div>
			<div>
				<b>Descrição</b>
			</div>
			<input type="text" name="descricao" id="descricao" value="<?php getParameter('descricao'); ?>"/>
		</div>
		
		<div>
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
		
		
		<input type="hidden" id="pag" name="pag" value="buscar_arquivos" />
		<input type="submit" value="Buscar" />
	</form>
</div>

<?php

		//Se nenhum criterio de busca foi colocado, mostramos todos
		if (!isset( $_GET["nome"]) && !isset( $_GET["descricao"]) ) {
	    		echo "Nenhuma Pesquisa feita.";
			}
		//Se um dos campos que queremos buscar foi escrito
		if (  isset($_GET["nome"]) || isset($_GET["descricao"]) || isset($_GET["categoria"])  ) {
			echo "Algumas Pesquisas foram encontradas:";
			
			$nome = $_GET["nome"];
			$descricao = $_GET["descricao"];
			$categoria = $_GET["categoria"];
			$id_cat_vet = split("-",$categoria);
			$id_cat = $id_cat_vet[0];
			

			if ($nome != NULL && $descricao != NULL ) {
				$comando = "SELECT nome,caminho, descricao FROM arquivo WHERE nome LIKE ('$nome%') and descricao LIKE ('$descricao%')";
			}

			if ($nome != NULL && $descricao == NULL ) {
				$comando = "SELECT nome,caminho, descricao FROM arquivo WHERE nome LIKE ('$nome%')";
			}

			if ($nome == NULL && $descricao != NULL ) {
				$comando = "SELECT nome,caminho, descricao FROM arquivo WHERE descricao LIKE ('$descricao%')";
			}
			
			if($categoria != NULL && $descricao == NULL && $nome == NULL){
				$comando = "SELECT nome, caminho,descricao FROM arquivo a, arq_cat ac where a.id_arq = ac.id_arq and ac.id_cat = $id_cat";
			}
			
			if($categoria != NULL && $descricao != NULL && $nome == NULL){
				$comando = "SELECT nome, caminho,descricao FROM arquivo a, arq_cat ac where a.id_arq = ac.id_arq and ac.id_cat = $id_cat and a.descricao LIKE ('$descricao%')";
			}
			
			if($categoria != NULL && $descricao != NULL && $nome != NULL){
				$comando = "SELECT nome, caminho,descricao FROM arquivo a, arq_cat ac where a.id_arq = ac.id_arq and ac.id_cat = $id_cat and a.descricao LIKE ('$descricao%') and a.nome LIKE ('$nome%')";
			}

			$sql = mysql_query($comando) or die(mysql_error());
			//echo var_dump($sql);
			
			echo "<ul>";
			for($i=0;$i< mysql_num_rows($sql);$i++){
				echo "<li>:::<a href='".mysql_result($sql, $i, 'caminho')."'/><b>".mysql_result($sql, $i, "nome")."</b></a></li>";
				echo "<li>".mysql_result($sql, $i, "descricao")."</li>";
			}
			echo "</ul>";
		}

?>