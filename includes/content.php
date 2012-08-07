<?php
$page = (isset($_REQUEST['pag'])) ? $_REQUEST['pag'] : '';
$page="paginas/".$page;
if ( file_exists( $page . '.php' ) ){
	include $page. '.php';

}else{
?>


<h2>Bem-vindo ao nosso sistema</h2>



<?php 
} ?>

<br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/>