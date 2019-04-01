(function($){

var element = $('.title');
var $p=element.find('p');
$p.html($p.text().replace(/(\w)/g, "<span>$&</span>"));
var t1= new TimelineLite();
t1.staggerFrom(element.find('p span'),0.19,{autoAlpha:0,rotation:90},0.2);

})(jQuery);