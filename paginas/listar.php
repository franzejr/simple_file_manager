<?
	include("banco/conecta.php");
?>
<script type="text/javascript">

/*Requisicoes Ajax */

//Funcao de inicializacao para saber o cookie
function init() {
	setContraste();
	increaseFontSize(Cookies['letra']);
}
function addDownload(nome,link){
	alert("ehuaheuah");
	location.href="actions/confirma_download.php?nome=" + nome+"&link="+link;
}

window.onload = init; 

var myRequest = new XMLHttpRequest();
  function callAjax1() {
  	var url = "arquivos.json";
  	
	 myRequest.open("GET", url, true);
	 myRequest.onreadystatechange = responseAjax;
	 myRequest.setRequestHeader("Cache-Control", "no-cache");
	 myRequest.send(null);
  }

  function callAjax2() {
	var categoria_vet = document.getElementById("categoria").value;
	var id_cat = categoria_vet[0];
	
  	var url = "http://localhost/~franzejr/devWeb/trabalho2/webservice/arquivos.php?format=json"+"&id_cat="+id_cat;
  	
	 myRequest.open("GET", url, true);
	 myRequest.onreadystatechange = responseAjax;
	 myRequest.setRequestHeader("Cache-Control", "no-cache");
	 myRequest.send(null);
  }

  function responseAjax() {
	 if(myRequest.readyState == 4) {
	    if(myRequest.status == 200) {
	        result = myRequest.responseText;
	        //alert(result);
	        //console.log(result);
	        var json = JSON.parse(result);
	        //document.getElementById('resultado').innerHTML = json.arquivos.arquivo[0].nome;
	        //writeLine(result);
	        startListagem();
	         for(var i = 0; i < json.length; i++){
	        	writeLine(json[i].arquivo.nome,json[i].arquivo.id_arq);
	        }
	       	endListagem();
	        
	        console.log("we made it");
	    } else {
	        console.log( " An error has occurred: " + myRequest.statusText);
	    }
	 }
  }
 
</script>



<div id="botoes">

	<!--<button onClick="callAjax1()" >Carregar Arquivos Cat X </button>
	<button onClick="callAjax2()" >Carregar Arquivos Cat Y </button>-->
	
	<select name="categoria" id="categoria">				
<?
	$sql = mysql_query("SELECT id_cat, nome FROM categoria") or die(mysql_error());
	for($i=0;$i<mysql_num_rows($sql);$i++){
		$nome = mysql_result($sql, $i, "nome");
		$id_cat = mysql_result($sql,$i,"id_cat");
?>
		<option><?=$id_cat?>-<?=$nome?></option>
	<? } ?>
	</select>
	<button onClick="callAjax2();">Buscar</button>
</div>


<div>
	<ul id="listagem">
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
		<li><span class="icon"></span><a href="view.html">Dados</a></li>
	</ul>
</div>