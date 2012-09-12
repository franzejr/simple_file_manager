<?php
include("banco/conecta.php");
?>
<script language="JavaScript"  charset="UTF-8" src="../funcoes.js"></script>

<?php 
$sql = mysql_query("SELECT distinct a.id_arq as id_arq, a.nome as nome, a.descricao as descricao,caminho FROM favorito f, arquivo a where f.id_arq = a.id_arq") or die(mysql_error());
if(mysql_num_rows($sql)==0){
	echo "<p>Sua lista de favoritos está vazia!</p>";
}else{
?>
<table style="text-align:center;">
	<tr style="border-bottom:10px solid #000;">
		<th width="10%">Nome</th>
	</tr>
	<tbody>
<?php 
	for($i=0;$i<mysql_num_rows($sql);$i++){
?>
	<tr>
		<td style="text-align:left;"><a href="<?=mysql_result($sql, $i, "caminho"); ?>"><?=mysql_result($sql, $i, "nome"); ?></a></td>
	</tr>

	<?php } ?>
	</tbody>
</table>
	<? echo "Total: ".mysql_num_rows($sql); ?>
<?php } ?>