/*
Module to work with JSON using Javascript 
@franzejr

*/

//Returns JSON
function getJSON(url){
	var request = new XMLHttpRequest();
	
	request.open("GET", url, true);
	request.onreadystatechange = responseAjax;
	request.setRequestHeader("Cache-Control", "no-cache");
	request.send(null);
	
}

//Returns a JSONObject
	  function responseAjax() {
		 if(myRequest.readyState == 4) {
		    if(myRequest.status == 200) {
		        result = myRequest.responseText;
		        alert(result);
		        var json = JSON.parse(result);
		        return json;
		        console.log("request has been ok");
		    } else {
		        console.log( " An error has occurred: " + myRequest.statusText);
		    }
		 }
	  }
