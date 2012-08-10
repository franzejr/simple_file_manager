<?php
include("banco/conecta.php");
?>
<script language="JavaScript"  charset="UTF-8" src="../funcoes.js"></script>

<?php 
$sql = mysql_query("SELECT distinct a.id_arq as id_arq, a.nome as nome, a.descricao as descricao,caminho FROM download d, arquivo a where d.id_arq = a.id_arq") or die(mysql_error());
if(mysql_num_rows($sql)==0){
	echo "<p>Sua lista de arquivos visualizados está vazia!</p>";
}else{
?>
<table style="text-align:center;">
	<tr style="border-bottom:10px solid #000;">
		<th width="10%">Nome</th>
		<th width="30%">Descrição</th>
	</tr>
	<tbody>
<?php 
	for($i=0;$i<mysql_num_rows($sql);$i++){
?>
	<tr>
		<td style="text-align:left;"><a href="<?=mysql_result($sql, $i, "caminho"); ?>"><?=mysql_result($sql, $i, "nome"); ?></a></td>
		<td style="text-align:left;"><?=mysql_result($sql, $i, "descricao"); ?></td>
	</tr>

	<?php } ?>
	</tbody>
</table>
	<? echo "Total: ".mysql_num_rows($sql); ?>
<?php } ?>