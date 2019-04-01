function verif_role(form) {
	var msg1 = $(form).find('div#msg1').empty();
	var msg2 = $(form).find('div#msg2').empty();
	
	
	
	
	if(!$(form).find('input[name="role"]').val().length) {
		msg1.html('<p class="error1">Please enter your role !</p>');
		$(form).find('input[name="role"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="role"]').val().match(/^[a-zA-Z0-9_-]+$/i)) {
		msg1.html('<p class="error1">Please enter a valid role !</p>');
		$(form).find('input[name="role"]').focus();
		return false;
	}
	if(!$(form).find('input[name="name"]').val().length) {
		msg2.html('<p class="error1">Please enter your role name !</p>');
		$(form).find('input[name="name"]').focus();
		return false;
	}
	else if(!$(form).find('input[name="name"]').val().match(/^[a-zA-Z0-9_-]+$/i)) {
		msg2.html('<p class="error1">Please enter a valid name !</p>');
		$(form).find('input[name="name"]').focus();
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