function recherche()
{
	var search = document.getElementById("search").value;//alert(search);
	var xhr = new XMLHttpRequest();
	xhr.open("GET","search2Res.php?search="+search,true);
	xhr.send(null);
	// onreadystatechange : attribut de l'objet XHR
	xhr.onreadystatechange = result;
	function result()
	{ 
		if((xhr.readyState == 4)&&(xhr.status== 200))
		{
		 document.getElementById("zone").innerHTML = xhr.responseText;
		}
	}

}