(function($){


  var textDiv = $("#textDiv"),
    sentence = textDiv.html().split(""),
    tl = new TimelineMax({repeat:1000000, repeatDelay:0.4, yoyo:true}); 
    
TweenLite.set(textDiv, {css:{perspective:500, perspectiveOrigin:"50% 50%", transformStyle:"preserve-3d"}});
textDiv.html("");

$.each(sentence, function(index, val) {
			if(val === " ") {
				val = "&nbsp;";			}
			var letter = $("<span/>", {id : "txt" + index}).html(val).appendTo(textDiv);
   tl.to(letter, 1, {autoAlpha:1, ease:Back.easeOut,  rotationX:360, transformOrigin:"50% 50% -20"}, index * 0.05);
  
  });
  
  
  
  
  })(jQuery);
  
  
  
  (function($){
 var skew = $(".logo");
  var skewTimeline = new TimelineLite();
    skewTimeline.from(skew, 0.3, {alpha:0})
      .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  	  .to(skew, 0.5, {skewX:0})
	  
	    .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  	  .to(skew, 0.5, {skewX:0})
	    .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  .to(skew, 0.5, {skewX:0})
	  
	  .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  	  .to(skew, 0.5, {skewX:0})
	  
	    .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  	  .to(skew, 0.5, {skewX:0})
	    .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  .to(skew, 0.5, {skewX:0})
	  
	  .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  	  .to(skew, 0.5, {skewX:0})
	  
	    .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  	  .to(skew, 0.5, {skewX:0})
	    .to(skew, 0.5, {skewX:5})
      .to(skew, 0.8, {skewX:-5})
	  .to(skew, 0.5, {skewX:10})
      .to(skew, 0.8, {skewX:-10})
	  .to(skew, 0.5, {skewX:12})
      .to(skew, 0.8, {skewX:-12})
	  .to(skew, 0.5, {skewX:0})
     /* .to(skew, 0.5, {skewX:5, skewY:-2})*/

})(jQuery);