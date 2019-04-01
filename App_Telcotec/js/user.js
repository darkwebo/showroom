function verif_user(form) {
	var msg1 = $(form).find('div#msg1').empty();
	var msg2 = $(form).find('div#msg2').empty();
	var msg3 = $(form).find('div#msg3').empty();
	var msg4 = $(form).find('div#msg4').empty();
	var msg5 = $(form).find('div#msg5').empty();
	var msg6 = $(form).find('div#msg6').empty();
	//fonction qui teste deux chaine
	
	function comparer()
	{
	var c1=$(form).find('input[name="password"]').val();
	var c2=$(form).find('input[name="password2"]').val();
	var res=1;
	var i=0;
	while( i<c1.length)
	{
	if(c1.charAt(i)!=c2.charAt(i))
	{
	 res=-1;
	}
	
	i++;
	}
	return res;
	
	
	}
	
	if(!$(form).find('input[name="nom"]').val().length) {
		msg1.html('<p class="error1">Please enter your first name !</p>');
		$(form).find('input[name="nom"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="nom"]').val().match(/^[a-zA-Z0-9_-]+$/i)) {
		msg1.html('<p class="error1">Please enter a valid first name !</p>');
		$(form).find('input[name="nom"]').focus();
		return false;
	}
	
	if(!$(form).find('input[name="prenom"]').val().length) {
		msg2.html('<p class="error1">Please enter your last name !</p>');
		$(form).find('input[name="prenom"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="prenom"]').val().match(/^[a-zA-Z0-9_-]+$/i)) {
		msg2.html('<p class="error1">Please enter a valid last name !</p>');
		$(form).find('input[name="prenom"]').focus();
		return false;
	}
	if(!$(form).find('input[name="email"]').val().length) {
		msg3.html('<p class="error1">Please enter your email !</p>');
		$(form).find('input[name="email"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="email"]').val().match(/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/)) {
		msg3.html('<p class="error1">Please enter a valid email !</p>');
		$(form).find('input[name="email"]').focus();
		return false;
	}
	
	
	if(!$(form).find('input[name="login"]').val().length) {
		msg4.html('<p class="error1">Please enter your username !</p>');
		$(form).find('input[name="login"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="login"]').val().match(/^[a-zA-Z0-9_-]+$/i)) {
		msg4.html('<p class="error1">Please enter a valid username !</p>');
		$(form).find('input[name="login"]').focus();
		return false;
	}
	
    if(!$(form).find('input[name="password"]').val().length) {
		msg5.html('<p class="error1">Please enter your password !</p>');
		$(form).find('input[name="password"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="password"]').val().match(/^[a-zA-Z0-9_-]+$/i)) {
		msg5.html('<p class="error1">Please enter a valid password !</p>');
		$(form).find('input[name="password"]').focus();
		return false;
	}
   if(!$(form).find('input[name="password2"]').val().length) {
		msg6.html('<p class="error1">Please retype your password !</p>');
		$(form).find('input[name="password2"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="password2"]').val().match(/^[a-zA-Z0-9_-]+$/i)) {
		msg6.html('<p class="error1">Please enter a valid password !</p>');
		$(form).find('input[name="password2"]').focus();
		return false;
	}
	
if(($(form).find('input[name="password"]').val().length!=$(form).find('input[name="password2"]').val().length)) {
		msg6.html('<p class="error1">Please check your password !</p>');
		$(form).find('input[name="password2"]').focus();
		return false;
	}
	if(comparer()==-1) {
		msg6.html('<p class="error1">Please check your password !</p>');
		$(form).find('input[name="password2"]').focus();
		return false;
	}
	
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


