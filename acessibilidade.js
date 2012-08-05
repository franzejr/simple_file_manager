/* 
	Funcoes referentes a acessibilidade

*/

	
	var fator_multiplicativo = 0;

	
	//Funcao para aumentar o tamanho da Fonte
	function increaseFontSize(multiplier){
		if (document.body.style.fontSize == "") {
    		document.body.style.fontSize = "0.8em";
  		}
  		
  		document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";	
  		
  		fator_multiplicativo = multiplier;
  		Cookies.create("letra",fator_multiplicativo,7);
	}


	//Funcao que seta exclusivamente o contraste assim que carrega
	function setContraste(){
		var body_node = document.getElementById('contentWrapper');
		body_node.style.background = Cookies['cor'];

	}

	 //Mudar Contraste
	 function mudarContraste(){
	  		var body_node = document.getElementById('contentWrapper');
			if(body_node.style.background == ""){
				body_node.style.background="#919191";
				Cookies.create("cor","#919191",7);
			}else{
				body_node.style.background="";
				Cookies.create("cor","",7);
			}
	  }

	function limparAcessibilidade(){
		Cookies.erase('cor');
		Cookies.erase('letra');
		alert('Suas configurações de acessibilidade foram resetadas! A página será colocada nas configurações padrões');
		document.body.style.fontSize = "0.8em";
		document.getElementById('contentWrapper').style.background="";
	}