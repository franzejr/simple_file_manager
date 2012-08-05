<?php
$page = (isset($_REQUEST['pag'])) ? $_REQUEST['pag'] : '';
$page="paginas/".$page;
if ( file_exists( $page . '.php' ) ){
	include $page. '.php';
}else{
?>


Bem-vindo ao nosso sistema


<?php 
} ?>