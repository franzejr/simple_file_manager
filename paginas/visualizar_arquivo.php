<?php

function getParameter($var){
	 if (isset($_GET[$var]) ) echo $_GET[$var]; 
}

?>
<link href='contact.css' rel='stylesheet' type='text/css' />
<div id="contato">
				<h2>Visualizando Arquivo</h2>
			<div>
				<div>
					<h3>Título</h3>
				</div>
					<h1><?=getParameter('nome');?></h1>
			</div>
			
			<div>
				<div>
					<h3>Arquivo</h3>
				</div>
				 <a href="<?=getParameter('caminho');?>">Arquivo</a> 
			</div>
			
			<div>
				<div>
					<h3>Descrição</h3>
				</div>
				<label>Descrição</label> <p> <?=getParameter('descricao');?></p>
			</div>
</div>
