$(function(){

if($('.tabs').size()>0){
$('.tabs').each(function() {
var current = null;


current=$(this).find('a:first').attr('href');

$(this).find('a[href="'+current+'"]').addClass('active');

});
}
});