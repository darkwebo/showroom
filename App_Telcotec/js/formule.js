function verif_formule(form) {
	var msg1 = $(form).find('div#msg1').empty();
	var msg2 = $(form).find('div#msg2').empty();
	var msg3 = $(form).find('div#msg3').empty();
	$('#number').hide();
    $('#opearande').hide();
    $('#kpi').hide();
	var z=document.getElementById('toto').value.trim();
	taille=z.length;
	
	/*fonction qui retourne un tableau le 3 premier caractere avant un crochet ouvrant*/
	function avant_crochet()
	 {
	   // var tab3= new Array();
	   //var k=0;
	   var res1=1;
	   var chaine="";
	   for (var i = 0; i < taille; i++)
	        {
			   if((z.charAt(i)=="[")&& i>0)
			   {
			     
				 chaine+=z.charAt(i-3);
				 chaine+=z.charAt(i-2);
				 chaine+=z.charAt(i-1);
				//tab3[k]=chaine
			
			
				if((chaine.indexOf("+")==-1)&&(chaine.indexOf("*")==-1)&&(chaine.indexOf("/")==-1)&&(chaine.indexOf("-")==-1)) 
				{
				res1=-1;
					//msg2.html('<p class="error2">"[" must be preceded by [  or + or - or * or / !!</p>');
					//document.getElementById('toto').focus();
				}
				//k++;
				 chaine="";
			   }
			
			}
	 
	       return  res1;
		   //tab3;
	 
	 
	 }
	var val1=avant_crochet();
	 /*fonction qui retourne un tableau le 3 premier caractere apres un crochet fermant*/
	 function apres_crochet()
	 {
	   // var tab1= new Array();
		//var k=0;
		var res2=1;
	   
	   var chaine="";
	   for (var i = 0; i < taille; i++)
	        {
			   if((z.charAt(i)=="]") && (i<taille-1))
			   {
			     
					 chaine+=z.charAt(i+1);
					 chaine+=z.charAt(i+2);
					// tab1[k]=chaine;
					 if((chaine.indexOf("+")==-1)&&(chaine.indexOf("*")==-1)&&(chaine.indexOf("/")==-1)&&(chaine.indexOf("-")==-1)) 
				{
				res2=-1;
					//msg2.html('<p class="error2">"]" must be succesed by ]  or + or - or * or / !!</p>');
					//document.getElementById('toto').focus();
				}
				//k++;
					
					 chaine="";
					 }
			
					
				   
			   }
			   return res2;
//			   tab1;
			
			
	 
	      
	 
	 
	 }
	var val2=apres_crochet();
	  function apres_parenthese()
	 {
	    //var tab3= new Array();
	   //var k=0;
	   var res3=1;
	   var chaine="";
	   for (var i = 0; i < taille; i++)
	        {
			   if((z.charAt(i)==")")&& (i<taille-1))
			   {
			     
					 chaine+=z.charAt(i+1);
					 chaine+=z.charAt(i+2);
					 
					 //tab3[k]=chaine;
					 if((chaine.indexOf("+")==-1)&&(chaine.indexOf("*")==-1)&&(chaine.indexOf("/")==-1)&&(chaine.indexOf("-")==-1)&&(chaine.indexOf("]")==-1))
								{
								res3=-1;
									//msg2.html('<p class="error2">")" must be succesed by ]  or + or - or * or / !!</p>');
									//document.getElementById('toto').focus();
									
								}
					 
					 
					 
					 
					 //k++;
					 chaine="";
					 }
			
					
				   
			   }
			
			
	 return res3; 
	 //tab3;
	    
	 
	 
	 }
	 var val3=apres_parenthese();
	
	
	/*fonction qui retourne le nbre de '+' dans la formule*/
	function plus() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var plus = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)=="+")
			   {
			    plus +=1;
			   }
			
			}
			return plus;
       
    }
	/*fonction qui retourne le nbre de '-' dans la formule*/
	function moins() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var moins = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)=="-")
			   {
			    moins +=1;
			   }
			
			}
			return moins;
       
    }
	
	
		/*fonction qui retourne le nbre de '*' dans la formule*/
	function fois() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var fois = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)=="*")
			   {
			    fois +=1;
			   }
			
			}
			return fois;
       
    }
	
	/*fonction qui retourne le nbre de '/' dans la formule*/
	function sur() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var sur = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)=="/")
			   {
			    sur +=1;
			   }
			
			}
			return sur;
       
    }
	
		
	function parenthese_ouvrant1() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var ouvrant = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)=="(")
			   {
			    ouvrant +=1;
			   }
			
			}
			return ouvrant;
       
    }


	
	
	function parenthese_fermant1() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var fermant = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)==")")
			   {
			    fermant +=1;
			   }
			}
       return fermant;
    }
	
	
	var f1=plus();
	var f2=moins();
	var f3=fois();
	var f4=sur();
	
	
	
	
	function parenthese_ouvrant() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var ouvrant = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)=="[")
			   {
			    ouvrant +=1;
			   }
			
			}
			return ouvrant;
       
    }


	
	
	function parenthese_fermant() 
	{
	 var z=document.getElementById('toto').value.trim();
	 var taille=z.length;
     var fermant = 0;
       for (var i = 0; i < taille; i++)
	        {
			   if(z.charAt(i)=="]")
			   {
			    fermant +=1;
			   }
			}
       return fermant;
    }
	 var open=parenthese_ouvrant();
	 var closed=parenthese_fermant();
	 var open1=parenthese_ouvrant1();
	 var closed1=parenthese_fermant1();
	 /*alert("opened"+ open +"; cloesd"+closed);*/

	
	if(!$(form).find('input[name="name"]').val().length) {
		msg1.html('<p class="error1">Please enter your formula name !</p>');
		$(form).find('input[name="name"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="name"]').val().match(/^[a-zA-Z0-9_\(\)]+$/i)) {
		msg1.html('<p class="error1">Please enter a valid formula name !</p>');
		$(form).find('input[name="name"]').focus();
		return false;
	}
	
	/* verification de la parie formule */
			if((f1==0)&&(f2==0)&&(f3==0)&&(f4==0)) {
		msg2.html('<p class="error2">This, it can\'t be a formula !!!</p>');
		document.getElementById('toto').focus();
		return false;
	
		}
		
		
		if(z=="") {
		msg2.html('<p class="error2">Please enter your formula  !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	if(!z.match(/^[a-zA-Z0-9\ \_\-\*\/\+\%\[\]\(\)]+$/gi)) {
		msg2.html('<p class="error2">Please enter a valid formula </p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	
	
		if(open>closed) {
		msg2.html('<p class="error2">Closing bracket "]"  missing !!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	if(open<closed) {
		msg2.html('<p class="error2">Opening bracket  "["  missing !!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(open1>closed1) {
		msg2.html('<p class="error2">Closing parenthesis missing !!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	if(open1<closed1) {
		msg2.html('<p class="error2">Opening parenthesis missing !!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	///////////////////
		if(val1==-1) {
		msg2.html('<p class="error2">"[" must be preceded by [  or + or - or * or / !!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(val2==-1) {
		msg2.html('<p class="error2">"]" must be succesed by ]  or + or - or * or / !!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	if(val3==-1) {
		msg2.html('<p class="error2">")" must be succesed by ]  or + or - or * or / !!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	
	/////////////////
		if(z=="+") {
		msg2.html('<p class="error2">" + " only  can\'t  be a formula!!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	if(z=="=") {
		msg2.html('<p class="error2">Please enter a valid formula " = " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z=="-") {
		msg2.html('<p class="error2">" - " only  can\'t  be a formula!!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z=="*") {
		msg2.html('<p class="error2">" * " only  can\'t  be a formula!!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z=="/") {
		msg2.html('<p class="error2">" / " only  can\'t  be a formula!!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z=="[") {
		msg2.html('<p class="error2"> "[" only  can\'t  be a formula!!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z=="]") {
		msg2.html('<p class="error2">" ] " only  can\'t  be a formula!!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.charAt(0)=="+") {
		msg2.html('<p class="error2">Incorrect  beginning of formula " + " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(0)=="-") {
		msg2.html('<p class="error2">Incorrect  beginning of formula " - " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(0)=="*") {
		msg2.html('<p class="error2">Incorrect  beginning of formula " * " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(0)=="/") {
		msg2.html('<p class="error2">Incorrect  beginning of formula " / " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(0)==")") {
		msg2.html('<p class="error2">Incorrect  beginning of formula " ) " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(0)=="(") {
		msg2.html('<p class="error2">Incorrect  beginning of formula " ( " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(0)=="]") {
		msg2.html('<p class="error2">Incorrect  beginning of formula " ] " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("++")>-1) {
		msg2.html('<p class="error2">the operation  " ++ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("--")>-1) {
		msg2.html('<p class="error2">the operation  " -- "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("**")>-1) {
		msg2.html('<p class="error2">the operation  " ** "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("//")>-1) {
		msg2.html('<p class="error2">the operation  " // "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	
		 if(z.indexOf("+-")>-1) {
		msg2.html('<p class="error2">the operation  " +- "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("+*")>-1) {
		msg2.html('<p class="error2">the operation  " +* "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("+/")>-1) {
		msg2.html('<p class="error2">the operation  " +/ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("-+")>-1) {
		msg2.html('<p class="error2">the operation  " -+ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("-*")>-1) {
		msg2.html('<p class="error2">the operation  " -* "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("-/")>-1) {
		msg2.html('<p class="error2">the operation  " -/ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("*+")>-1) {
		msg2.html('<p class="error2">the operation  " *+ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("*-")>-1) {
		msg2.html('<p class="error2">the operation  " *- "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("*/")>-1) {
		msg2.html('<p class="error2">the operation  " */ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("/+")>-1) {
		msg2.html('<p class="error2">the operation  " /+ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("/-")>-1) {
		msg2.html('<p class="error2">the operation  " /- "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("/*")>-1) {
		msg2.html('<p class="error2">the operation  " /* "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf(")(")>-1) {
		msg2.html('<p class="error2">the operation  " )( "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		 if(z.indexOf("][")>-1) {
		msg2.html('<p class="error2">the operation  " ][ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("()")>-1) {
		msg2.html('<p class="error2">the operation  " () "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.indexOf("[]")>-1) {
		msg2.html('<p class="error2">the operation  " [] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	if(z.indexOf("(+)")>-1) {
		msg2.html('<p class="error2">the operation  " (+) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	if(z.indexOf("[+]")>-1) {
		msg2.html('<p class="error2">the operation  " [+] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("[-]")>-1) {
		msg2.html('<p class="error2">the operation  " [-] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.indexOf("(-)")>-1) {
		msg2.html('<p class="error2">the operation  " (-) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("(*)")>-1) {
		msg2.html('<p class="error2">the operation  " (*) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		 if(z.indexOf("[*]")>-1) {
		msg2.html('<p class="error2">the operation  " [*] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("(/)")>-1) {
		msg2.html('<p class="error2">the operation  " (/) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.indexOf("[/]")>-1) {
		msg2.html('<p class="error2">the operation  " [/] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("(+")>-1) {
		msg2.html('<p class="error2">the operation  " (+ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	if(z.indexOf("[+")>-1) {
		msg2.html('<p class="error2">the operation  " [+ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("(-")>-1) {
		msg2.html('<p class="error2">the operation  " (- "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.indexOf("[-")>-1) {
		msg2.html('<p class="error2">the operation  " [- "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("(*")>-1) {
		msg2.html('<p class="error2">the operation  " (* "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		 if(z.indexOf("[*")>-1) {
		msg2.html('<p class="error2">the operation  " [* "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("(/")>-1) {
		msg2.html('<p class="error2">the operation  " (/ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.indexOf("[/")>-1) {
		msg2.html('<p class="error2">the operation  " [/ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	
		if(z.indexOf("+)")>-1) {
		msg2.html('<p class="error2">the operation  " +) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("-)")>-1) {
		msg2.html('<p class="error2">the operation  " -) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	    }
		
		if(z.indexOf("+(")>-1) {
		msg2.html('<p class="error2">Please use " +[ "  instead of " +( " !!!!</p>');
		document.getElementById('toto').focus();
		return false;
	    }
		if(z.indexOf("-(")>-1) {
		msg2.html('<p class="error2">Please use " -[ "  instead of " -( " !!!!</p>');
		document.getElementById('toto').focus();
		return false;
	    }
	
	     if(z.indexOf("*(")>-1) {
		msg2.html('<p class="error2">Please use " *[ "  instead of " *( " !!!!</p>');
		document.getElementById('toto').focus();
		return false;
	    }
		
		  if(z.indexOf("/(")>-1) {
		msg2.html('<p class="error2">Please use " /[ "  instead of " /( " !!!!</p>');
		document.getElementById('toto').focus();
		return false;
	       }
	
	
		 if(z.indexOf("*)")>-1) {
		msg2.html('<p class="error2">the operation  " *) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	      }
	
		if(z.indexOf("/)")>-1) {
		msg2.html('<p class="error2">the operation  " /) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.indexOf("+]")>-1) {
		msg2.html('<p class="error2">the operation  " +] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("-]")>-1) {
		msg2.html('<p class="error2">the operation  " -] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("*]")>-1) {
		msg2.html('<p class="error2">the operation  " *] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("/]")>-1) {
		msg2.html('<p class="error2">the operation  " /] "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		if(z.indexOf("))")>-1) {
		msg2.html('<p class="error2">the operation  " )) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.indexOf("((")>-1) {
		msg2.html('<p class="error2">the operation  " (( "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	if(z.charAt(taille-1)=="+") {
		msg2.html('<p class="error2">Incorrect  end of formula " + " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(taille-1)=="-") {
		msg2.html('<p class="error2">Incorrect  end of formula " - " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(taille-1)=="*") {
		msg2.html('<p class="error2">Incorrect  end of formula " * " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(taille-1)=="/") {
		msg2.html('<p class="error2">Incorrect  end of formula " / " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		if(z.charAt(taille-1)=="[") {
		msg2.html('<p class="error2">Incorrect  end of formula " [ " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("+(")>-1) {
		msg2.html('<p class="error2">Please use " +[ "  instead of " +( " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		 if(z.indexOf("-(")>-1) {
		msg2.html('<p class="error2">Please use " -[ "  instead of " -( " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		 if(z.indexOf("*(")>-1) {
		msg2.html('<p class="error2">Please use " *[ "  instead of " *( " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
		 if(z.indexOf("/(")>-1) {
		msg2.html('<p class="error2">Please use " /[ "  instead of " /( " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
		 if(z.indexOf("([")>-1) {
		msg2.html('<p class="error2">The operation  " ([ "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
		 if(z.indexOf("])")>-1) {
		msg2.html('<p class="error2">The operation  " ]) "  is not allowed !</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	
	if(z.charAt(taille-1)==".") {
		msg2.html('<p class="error2">Incorrect  end of formula " . " !!!</p>');
		document.getElementById('toto').focus();
		return false;
	}
	
	
	
	
	
	
	if(($(form).find('input[name="operator"]')[0].checked==false)&& ($(form).find('input[name="operator"]')[1].checked==false)&&
	($(form).find('input[name="operator"]')[2].checked==false)&&($(form).find('input[name="operator"]')[3].checked==false)) {
		
			msg3.html('<p class="error3">Please choose an operator !</p>');
	return false;
	}
	
	return true;
}




$(function(){
$('form[name="formule"]').find('select[name="file"]').click(function() {
$('#number').show();
$('#opearande').show();
$('#kpi').show();
});

});