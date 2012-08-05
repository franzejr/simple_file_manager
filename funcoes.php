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
function status($k){
		switch ($k){
			case '0':
				echo "IC";
				break;
			case '1':
				echo "Mestrado";
				break;
			case '2':
				echo "Doutorado";
				break;			
			case '3':
				echo "T&eacute;cnico";
				break;
			case '4':
				echo "Pesquisador";
				break;
		}
		
	}
function conferirSolicitacao($t,$url){
}
function gravaSolicitacao($t){
	foreach($t as $campo => $valor){
		if($campo=="segurancaa" && ($valor == "" || $valor == "Outro.."))
			$_SESSION[$campo]= "Outro..";
		else
			$_SESSION[$campo] = $valor;
	}	
}
function limpaSolicitacao($t){
	foreach($t as $campo => $valor){
		$_SESSION[$campo] = "";
	}
}
function deletaSolicitacao($maquina, $sol){
	
}
