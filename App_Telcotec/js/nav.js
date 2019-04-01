$(function(){

var anchor=window.location.hash;
if($('.tabs').size()>0){
$('.tabs').each(function() {
var current = null;

/*if(anchor!='' && $(this).find('a[href="'+anchor+'"]').length>0)
{
current=anchor;
}
else{
current=$(this).find('a:first').attr('href');
}*/
current=$(this).find('a:first').attr('href');

$(this).find('a[href="'+current+'"]').addClass('active');

$(current).siblings().hide();
$(this).find('a').click(function(){
var link=$(this).attr('href');
  if(link==current)
    {
	return false;
	}
	else{
	
	$(this).siblings().removeClass('active');
	$(this).addClass('active');
	$(link).show().siblings().hide();
	current=link;
	}
});

});
}
});