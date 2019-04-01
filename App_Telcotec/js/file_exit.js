function verif_file1(form) {
	
	var msg2 = $(form).find('div#msg2').empty();
	var msg3 = $(form).find('div#msg3').empty();
	var msg4= $(form).find('div#msg4').empty();
	
	
	
	
	if(!$(form).find('input[name="date"]').val().length) {
		msg2.html('<p class="error1">Please enter your insertion date !</p>');
		$(form).find('input[name="date"]').focus();
		return false;
	}
	if(!$(form).find('input[name="url"]').val().length) {
		msg3.html('<p class="error1">Please enter your file path !</p>');
		$(form).find('input[name="url"]').focus();
		return false;
	} 
	
	
	
	
	  if(($(form).find('input[name="url"]').val().lastIndexOf('.csv')==-1)&&($(form).find('input[name="url"]').val().lastIndexOf('.txt')==-1)&&($(form).find('input[name="url"]').val().lastIndexOf('.xls')==-1))
			{
				
				msg3.html('<p class="error1"> Invalid File  Format !</p>');
				return false;
          }
		  
		  if(($(form).find('input[name="text"]:checked').val()!="Text")&&($(form).find('input[name="text"]:checked').val()!="Xcel")&& ($(form).find('input[name="text"]:checked').val()!="Csv")){
		msg4.html('<p class="error1">Please check the file Format !</p>');
		
		return false;
	} 
	
	 if(($(form).find('input[name="url"]').val().lastIndexOf('.csv')>-1)&&(($(form).find('input[name="text"]:checked').val()!="Csv")))
			{
				
				msg4.html('<p class="error1"> Please check the approriate format !</p>');
				return false;
          }
		  if(($(form).find('input[name="url"]').val().lastIndexOf('.txt')>-1)&&(($(form).find('input[name="text"]:checked').val()!="Text")))
			{
				
				msg4.html('<p class="error1"> Please check the approriate format !</p>');
				return false;
          }
		  if(($(form).find('input[name="url"]').val().lastIndexOf('.xls')>-1)&&(($(form).find('input[name="text"]:checked').val()!="Xcel")))
			{
				
				msg4.html('<p class="error1"> Please check the approriate format !</p>');
				return false;
          }
		  
		  
		  
	 
		  
		  
		  
		  
		  
		 $('.loader').show();
	return true;
	
}



(function($){


//just a basic example of some TweenMax features

TweenMax.from(" fieldset legend", .6, {opacity:0, repeat:1000000, yoyo:true})

/*
staggerFrom() docs: http://api.greensock.com/js/com/greensock/TweenMax.html#staggerFrom()
*/

//targets, duration, vars, stagger
TweenMax.staggerFrom("fieldset ol li", 2, {top:"+=100px", opacity:0, delay:2, ease:Back.easeOut}, 0.1);

TweenMax.staggerFrom("#bt", 7,{top:"+=100px", opacity:0, delay:2, ease:Back.easeOut}, 0.1);

})(jQuery);