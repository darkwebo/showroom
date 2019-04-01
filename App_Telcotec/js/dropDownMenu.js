$(function() {
	$('ul#nav>li').each(function(index) {
		$(this).hover(function() {
			$(this).find('ul:first').show();
			
			$(this).find('ul:first>li').each(function(index) {
				$(this).hover(function() {
					$(this).find('ul').show();
				}, function() {
					$(this).find('ul').hide();
				});
			});
		}, function() {
			$(this).find('ul:first').hide();
		});
	});
});