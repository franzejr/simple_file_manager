<?php

function redirect($url){
?>
<script>
	window.location = '<?php echo $url; ?>';
</script>
	
	<?php 
	exit;
}
function alert($error)
    {
?><script language='javascript'>alert('<?=$error?>')</script>
<?php     }
