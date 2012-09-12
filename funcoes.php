<?php
function redirect($url){
?>
	 <script>
	window.location = '<?php echo $url; ?>';
	</script>
	<?php 
	exit;
}
function mensagem($error)
    {
?><script language='javascript'>alert('<?=$error?>')</script>
<?php     }
function confere($t, $url){
		foreach ($t as $campo => $valor){
			if($valor == ""){
				mensagem("O Campo ".$campo." é obrigatório!");
				redirect($url);
				return false;
			}
		}
		return true;		
	}
