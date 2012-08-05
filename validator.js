/*
Funcoes referentes a validacao dos campos
@franzejr
*/

//Mascaras
function mascara(object,f){
    v_obj=object;
    v_fun=f
    setTimeout("executarMascara()",1)
}

function executarMascara(){
    v_obj.value=v_fun(v_obj.value);
}

function mascaraCPF(cpf){
	
	cpf=cpf.replace(/\D/g,"");                   
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2");
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2");                                            
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
    return cpf;	
}

function mascaraTel(tel){
	
	tel=tel.replace(/\D/g,"");                   
    tel=tel.replace(/^(\d\d)(\d)/g,"($1) $2")
    tel=tel.replace(/(\d{4})(\d)/,"$1.$2")   
    return tel;	
}

//Nao deixa colocar numeros no campo
function soLetras(v){
    return v.replace(/[0-9]/g,"");
}


function validarTelefone(){
	var telefone1 = document.getElementById('telefone1').value;
	var telefone2 = document.getElementById('telefone2').value;

	//Verificando se nao esta nulo ou vazio
	if(telefone1 == null || telefone1 == ""){
		alert("Telefone eh obrigatório");
		document.getElementById('telefone1').focus();
		return false;
	}
	//Verificando se eh um numero
	if((isNaN(telefone1)) && (isNaN(telefone2)) ){
		alert("Telefone precisa ser um numero");
		document.getElementById('telefone1').focus();
		return false;
	}
	return true;

}

function validarEmail(event,campo,valor){
	//var email = document.getElementById('email').value;
	var email = valor;
	var erro = false;
	var email = email.toString();
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	  {
	  	erro = true;
	  }
	  
	if (erro) {
		//campo.focus();
		document.getElementById('email').focus();
		campo.value = "";
		return false;
	}
	return true;
}

function getHint(campo){
		var campo_nome = campo.name;
		var hint_name = campo_nome + "_" + "hint";
		return hint_name;
}

function validarEndereco(campo,valor){
	//var endereco = document.getElementById('endereco').value;
	
	if(valor.length < 2){
		return false;
	}
	return true;
}

function enderecoValido(campo,valor){
	if(validarEndereco(campo,valor)){
		document.getElementById(getHint(campo)).innerHTML = null;
	}else{
		document.getElementById(getHint(campo)).innerHTML = "O endereço precisa ter no mínimo 2 caracteres";
	}
}

function obrigatorio(campo,obrigatorio){
	if(obrigatorio){
		document.getElementById(getHint(campo)).innerHTML = "Este campo é obrigatório!";
	}
}

function setHint(campo,texto){
	var campo_nome = campo.name;
	var hint_name = campo_nome + "_" + "hint";
	document.getElementById(hint_name).innerHTML = texto;
}

function resetar(campo){
	var campo_nome = campo.name;
	var hint_name = campo_nome + "_" + "hint";
	document.getElementById(hint_name).innerHTML = null;
	return true;
}

function validarCampos(){
	var nome_campo = document.getElementById("nome");
	var cpf_campo = document.getElementById("cpf");
	var telefone_campo = document.getElementById("telefone1");
	var flag = 0;

	if(nome_campo.value == ""){
		setHint(nome_campo, "Este campo eh obrigatorio");
		nome_campo.style.backgroundColor = "#A34646";
		flag ++;
	}
	if(cpf_campo.value == ""){
		setHint(cpf_campo, "Este campo eh obrigatorio");
		cpf_campo.style.backgroundColor = "#A34646";
		flag++;
	}
	if(telefone_campo.value == ""){
		setHint(telefone_campo, "Este campo eh obrigatorio");
		telefone_campo.style.backgroundColor = "#A34646";
		flag++;
	}

	if(flag != 0 ){
		return false;
	}
	else{
		return true;
	}

}




