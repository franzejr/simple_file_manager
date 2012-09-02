<h2>Listar Categorias</h2>

<?php
//include("seg/admin.php");
include("banco/conecta.php");
?>
<script language="JavaScript"  charset="UTF-8" src="funcoes.js"></script>

<?php 
$sql = mysql_query("SELECT id_cat,nome, descricao FROM categoria") or die(mysql_error());
if(mysql_num_rows($sql)==0){
	echo "<p>Sem Arquivos Inseridos até o momento</p>";
}else{
?>
<table style="text-align:center;">
	<tr style="border-bottom:10px solid #000;">
		<th width="10%">Nome</th>
		<th width="30%">Descrição</th>
		<th width="7%">Alterar</th>
		<th width="7%">Excluir</th>
	</tr>
	<tbody>
<?php 
	for($i=0;$i<mysql_num_rows($sql);$i++){
		$nome = mysql_result($sql, $i, "nome");
		$id_cat = mysql_result($sql,$i,"id_cat");
		$descricao = mysql_result($sql,$i,"descricao");
?>
	<tr>
		<td style="text-align:left;"><?=$nome ?></td>
		<td style="text-align:left;"><?=$descricao ?></td>
		<td width=10%;><a href="layoutA.php?pag=alterar_categoria&nome=<?=$nome?>&descricao=<?=$descricao?>&id_cat=<?=$id_cat?>"><img border=0 src="images/alterar.png" /></a></td>
		<td><a href="#"><img border=0 src="images/excluir.png" onclick="deletarCategoria('<?=mysql_result($sql,$i,"id_cat");?>','<?=mysql_result($sql,$i,"nome");?>' );" /></a></td>
	</tr>

	<?php } ?>
	</tbody>
</table>
	<? echo "Total: ".mysql_num_rows($sql); ?>
<?php } ?>