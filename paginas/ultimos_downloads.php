
<?php
include("banco/conecta.php");
?>
<script language="JavaScript"  charset="UTF-8" src="../funcoes.js"></script>

<?php 
$sql = mysql_query("SELECT id_arq, nome, descricao,caminho FROM arquivo") or die(mysql_error());
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
?>
	<tr>
		<td style="text-align:left;"><a href="<?=mysql_result($sql, $i, "caminho"); ?>"><?=mysql_result($sql, $i, "nome"); ?></a></td>
		<td style="text-align:left;"><?=mysql_result($sql, $i, "descricao"); ?></td>
		<td width=10%;><a href="index.php?pag=alterar_categoria&id_arq=<?=mysql_result($sql,$i,"id_arq");?>"><img border=0 src="images/alterar.png" /></a></td>
		<td><a href="#"><img border=0 src="images/excluir.png" onclick="deletar('<?=mysql_result($sql,$i,"descricao");?>','<?=mysql_result($sql,$i,"descricao");?>' );" /></a></td>
	</tr>

	<?php } ?>
	</tbody>
</table>
	<? echo "Total: ".mysql_num_rows($sql); ?>
<?php } ?>