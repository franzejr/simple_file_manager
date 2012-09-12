<h2>Listar Arquivos</h2>

<?php
//include("seg/admin.php");
include("banco/conecta.php");
?>
<script language="JavaScript"  charset="UTF-8" src="funcoes.js"></script>

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
		<th width="7%">Favoritar</th>
		<th width="7%">Alterar</th>
		<th width="7%">Excluir</th>
	</tr>
	<tbody>
<?php 
	for($i=0;$i<mysql_num_rows($sql);$i++){
		$nome = mysql_result($sql, $i, "nome");
		$id_arq = mysql_result($sql,$i,"id_arq");
		$descricao = mysql_result($sql,$i,"descricao");
		$caminho = mysql_result($sql, $i, "caminho");
		$id_usu = $_SESSION['id_usu'];
?>
	<tr>
		<td style="text-align:left;"><a href="<?=$caminho ?>"><?=$nome ?></a></td>
		<td style="text-align:left;"><?=$descricao ?></td>
				<td width=10%;><a onclick="adicionarFavorito('<?=mysql_result($sql,$i,"id_arq");?>','<?=mysql_result($sql,$i,"nome");?>','<?=$id_usu?>' );"><img border=0 src="images/starred.png" /></a></td>
		<td width=10%;><a href="layoutA.php?pag=alterar_arquivo&nome=<?=$nome?>&descricao=<?=$descricao?>&id_arq=<?=$id_arq?>&caminho=<?=$caminho?>"><img border=0 src="images/alterar.png" /></a></td>
		<td><a href="#"><img border=0 src="images/excluir.png" onclick="deletarArquivo('<?=mysql_result($sql,$i,"id_arq");?>','<?=mysql_result($sql,$i,"nome");?>' );" /></a></td>
	</tr>

	<?php } ?>
	</tbody>
</table>
	<? echo "Total: ".mysql_num_rows($sql); ?>
<?php } ?>