<script type="text/javascript">

var myRequest = new XMLHttpRequest();
	  function callAjax() {
	  	var url = document.getElementById('jsonPath').value;
	  	
		 myRequest.open("GET", url, true);
		 myRequest.onreadystatechange = responseAjax;
		 myRequest.setRequestHeader("Cache-Control", "no-cache");
		 myRequest.send(null);
	  }

	  function responseAjax() {
		 if(myRequest.readyState == 4) {
		    if(myRequest.status == 200) {
		        result = myRequest.responseText;
		        alert(result);
		        //console.log(result);
		        var json = JSON.parse(result);
		        document.getElementById('resultado').innerHTML = json.arquivo[0].nome;
		        for(var i = 0; i < json.arquivo.length; i++){
		        	writeLine(json.arquivo[i].nome);
		        }
		        	
		        console.log("we made it");
		    } else {
		        console.log( " An error has occurred: " + myRequest.statusText);
		    }
		 }
	  }
	  
	  function writeLine(arquivo){
	  	document.getElementById('resultado').innerHTML += "<li>";
	  	document.getElementById('resultado').innerHTML += arquivo;
	  	document.getElementById('resultado').innerHTML += "</li>";
	  }
	  
	
</script>

<div id="pesquisar">
	Coloque o .json que voce deseja obter o resultado:<input value="arquivos.json" type="text" id="jsonPath"  /> 
	<button  onClick="callAjax()" > Requisitar</button>
</div>

<div id="resultado">
</div>


