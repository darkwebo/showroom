(function($){


//just a basic example of some TweenMax features

TweenMax.from("legend", .6, {opacity:0, repeat:1000000, yoyo:true})

/*
staggerFrom() docs: http://api.greensock.com/js/com/greensock/TweenMax.html#staggerFrom()
*/

//targets, duration, vars, stagger
TweenMax.staggerFrom("table tr th", 2, {top:"+=100px", opacity:0, delay:2, ease:Back.easeOut}, 0.1);
TweenMax.staggerFrom("table tr td", 8, {top:"+=100px", opacity:0, delay:3, ease:Back.easeOut}, 0.2);

TweenMax.staggerFrom("#bt", 8,{top:"+=100px", opacity:0, delay:4, ease:Back.easeOut}, 0.2);

})(jQuery);


