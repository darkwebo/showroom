
function select()
{
	//alert("yes");
	var indice = document.f.name.selectedIndex;
	var filter = document.f.name.options[indice].value;//alert(filter);
	var xhr = new XMLHttpRequest();
	xhr.open("GET","searchRes.php?filter="+filter,true);
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
