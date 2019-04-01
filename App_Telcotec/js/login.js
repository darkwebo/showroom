(function($){


window.onload = function() {
  var logo = document.getElementById("logo"),
      bar = document.getElementById("bar");
  TweenLite.to(bar, 2, {width:"652px", delay:1});
  TweenLite.to(logo, 3, {left:"537px", delay:3});
}
})(jQuery);
(function($){
var element = $('.para');
var $p=element.find('p');
$p.html($p.text().replace(/(\w)/g, "<span>$&</span>"));
var t1= new TimelineLite();
t1.staggerFrom(element.find('p span'),0.19,{autoAlpha:0,rotation:90},0.2);
})(jQuery);

(function($){
var element = $('#skew');
var t1= new TimelineLite();
t1.staggerFrom(element.find('img'),4,{autoAlpha:0,scale:0.5},4);
})(jQuery);


(function($){
var element = $('.foot1');
element.find('p').css('opacity',0).animate({opacity: 1},70000);





})(jQuery);










