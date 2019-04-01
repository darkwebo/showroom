(function($){

//we hide the wrapper initially and then show it once the page loads and we're ready to animate (to prevent the user from seeing a flash of content on the screen). We use jQuery for simplicity, but it'd be just as easy to alter the element's style.visibility directly or use a TweenLite.set() call. In fact, we don't need jQuery at all for this page - we just wanted to demonstrate how well GSAP and jQuery can work together.
$("#boxWrapper").css({visibility:"visible"});

var t = new TimelineLite(),
    letters = $("#boxWrapper div");
t.staggerFrom(letters, 0.5, {opacity:0, scale:0, rotation:-180}, 0.3)
  .staggerTo(letters, 0.3, {scale:0.8}, 0.3, 0.7);
  
  })(jQuery);
  
  
  
  