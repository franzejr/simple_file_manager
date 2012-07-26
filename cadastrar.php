<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Cadastro no Sistema</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta content='text/html; charset=UTF-8' http-equiv='content-type' /> 
    <link href='base.css' rel='stylesheet' type='text/css' />
    <link href='contact.css' rel='stylesheet' type='text/css' />
    <link href='validacao.css' rel='stylesheet' type='text/css' />
    <script src="validator.js" type="text/javascript" ></script>	
</head>

<body>
<div id="headerWrapper">
	<h1>Gerenciamento de Arquivos</h1>

</div>

<div id="contentWrapper">
	<div id="menu">
		<h1>Menu</h1>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="indexA.php">Layout A</a></li>
			<li><a href="indexB.php">Layout B</a></li>

			<li><a href="#">Contato</a></li>
		</ul>
			<div id="banner">
		<img src="http://www.deti.ufc.br/moodle/theme/formal_white/logo.jpg" width="75" height="75" alt="banner"/>
			</div>
	</div>

	<div id="contato">
		<h3>Cadastro de Novo Usuário</h3>
		<form method="post" action="recebe.php" onSubmit="return validarCampos();">
			<fieldset>
				<legend>Dados Pessoais</legend>
				<div>
					<label>Nome	</label> <input onFocus="obrigatorio(this,true)" onblur="resetar(this)" onkeypress="mascara(this,soLetras)" name="nome" id="nome" type="text" />
					<div id="nome_hint"></div>
				</div>
				<div>
					<label>Apelido</label> <input onFocus="setHint(this,'Coloque o seu apelido!')" onblur="resetar(this)" name="apelido" id="apelido" type="text" />
					<div id="apelido_hint"></div>
				</div>
				<div>
					<label>CPF</label> <input onFocus="setHint(this,'Seu CPF é fundamental para nossa Validação!')" onblur="resetar(this)" onkeypress="mascara(this,mascaraCPF)" maxlength="14" name="cpf" id="cpf" type="text" />
					<div id="cpf_hint"></div>
				</div>
				<div>
					<label>E-mail</label> <input onFocus="setHint(this,'Coloque o seu e-mail, ele é obrigatório!')" onblur="validarEmail(event,this,this.value) && resetar(this)" name="email" id="email" type="text" /><div id="email_hint"></div>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>Informações adicionais</legend>
				<div>
					<label>Endereço</label> <input onblur="enderecoValido(this,this.value)" name="endereco" id="endereco" type="text" /><div id="endereco_hint"></div>
				</div>		
				<div>
					<label>Complemento</label> <input onFocus="setHint(this,'O Complemento é algo opcional.')" onblur="resetar(this)" name="complemento" id="complemento" type="text" />
					<div id="complemento_hint"></div>
				</div>
				<div>
					<label>Telefone</label><small>(obrigatório)</small> <input onFocus="setHint(this,'Precisamos saber o número do seu telefone!')" onblur="resetar(this)" onkeypress="mascara(this,mascaraTel)" name="telefone1" id="telefone1" maxlength="14" type="text" />
					<div id="telefone1_hint"></div>
				</div>
				
				<div>
					<label>Telefone 2</label> <input onkeypress="mascara(this,mascaraTel)" name="telefone2" maxlength="14" id="telefone2" type="text" />
				</div>
			</fieldset>
			
			<input type="submit" value="Cadastrar" />

		</form>
	</div>
<div id="validacao"></div>
</div>

<div id="validator">
	<p>
	    <a href="http://validator.w3.org/check?uri=referer"><img
	      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
	</p>
</div>
</body>
</html>
	
