(function($){

/*
* See http://www.greensock.com/gsap-js/ for details about GSAP.
* 
* We simply create a TimelineMax and then each part of the 
* animation is modularized into its own function that returns a 
* tween or timeline, which we dump into the main timeline to very
* easily build something much more complex. It also allows us to
* jump around during production to various spots using times or labels
* like when we're tweaking the part that's 30 seconds into the animation, 
* we just add master.seek(30) at the end to have it jump there for preview
* (rather than watching the first 30 seconds every...single...time). 
* This technique also allows us to attach a scrubber to the entire
* thing, speed it up or slow it down, re-order the pieces of the animation, etc. 
*/







/* debut animation video greensock*/
var master = new TimelineMax({delay:1.2}),
    bg = $("#featureBackground"),
    centerY = $("#featureAnimation").height() / 2,
    centerX = $("#featureAnimation").width() / 2,
    radius = Math.max(centerX, centerY) + 50,
    slider = $("#ctrl_slider"),
    sliderValue = {value:0},
    _isOldIE = (document.all && !document.addEventListener);

/*slider.slider({
  range: false,
  min: 0,
  max: 100,
  step:.1,
  start:function() {
    master.pause();
  },
  slide: function ( event, ui ) {
    master.progress( ui.value / 100 );
  },
  stop:function() {
    master.play();
  }
});*/

master.eventCallback("onUpdate", function() {
  sliderValue.value = master.progress() * 100;
  //slider.slider(sliderValue);
});
master.eventCallback("onComplete", function() {
  TweenLite.to(slider, 1, {autoAlpha:1});
  replayReveal();
});
$("#featureClick").on("click", function() {
  window.location.href = "";
});

TweenLite.set(".featureTextGreen", {textShadow:"0px 0px 8px #91e600"});
master.add( whyGSAP() )
.add( performance(), "-=1")
.add( performance1(), "-=0.5")
.add( performance2(), "-=0.5")
.add( performance3(), "-=0.5")
.add( compatibility(), "-=0.5")
/*.add( transforms(), "=0")*/
/*.add( animateAnything(), "-=0.5")*/
/*.add( control(), "-=0.5")*/
.add( newStandard());

function whyGSAP() {
  var tl = new TimelineLite(),
      text = $("#whyGSAP"),
      split = new SplitText("#whyGSAP", {type:"chars,words"}),
      chars = split.chars,
      centerIndex = Math.floor(chars.length / 2),
      i;
  for (i = 0; i < chars.length; i++) {
    tl.from(chars[i], 1.8, {x:(i - centerIndex) * 40, opacity:0, ease:Power2.easeOut}, i * 0.1);
  }
  tl.fromTo(text, 5, {z:500, y:74, visibility:"visible"}, {z:-1000, ease:SlowMo.ease.config(0.1, 0.9)}, 0);
  tl.to(text, 2, {rotationX:-720, autoAlpha:0, scale:0.3, ease:Power2.easeInOut}, "-=1.5");
  return tl;
}

function performance() {
  var tl = new TimelineLite(),
      text = $("#performance"),
      duration = 0.6,
      i = 45,
      repeats = 2,
      stars = [],
      star, angle, delay;
  while (--i > -1) {
    star = $("<img class='star' src='http://www.greensock.com/js/img/dot.png'/>").appendTo(bg);
    stars.push(star);
    angle = Math.random() * Math.PI * 2;
    delay = Math.random() * duration;
    tl.set(star, {display:"block"}, delay);
    if (_isOldIE) {
      //IE8 and earlier perform better when animating top/left/width/height instead of x/y/scale.
      TweenLite.set(star, {width:1, height:1, top:centerY, left:centerX});
      tl.add( new TweenMax(star, duration, {
        top:(centerY + Math.sin(angle) * radius) | 0,
        left:(centerX + Math.cos(angle) * radius) | 0,
        width:22,
        height:22,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    } else {
      TweenLite.set(star, {scale:0.05, top:centerY, left:centerX, z:0.1});
      tl.add( new TweenMax(star, duration, {
        y:Math.sin(angle) * radius,
        x:Math.cos(angle) * radius,
        scale:1.5,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    }
  }
  tl.fromTo(text, 3, {scale:0.1, y:centerY-36, z:0.1}, {scale:1.8, ease:SlowMo.ease.config(0.5, 0.4)}, 0.3);
  tl.fromTo(text, 3, {opacity:0}, {autoAlpha:1, ease:SlowMo.ease.config(0.5, 0.4, true)}, 0.3);
  tl.set(stars, {display:"none"});
  return tl;
}
function performance1() {
  var tl = new TimelineLite(),
      text = $("#performance1"),
      duration = 0.6,
      i = 45,
      repeats = 2,
      stars = [],
      star, angle, delay;
  while (--i > -1) {
    star = $("<img class='star' src='http://www.greensock.com/js/img/dot.png'/>").appendTo(bg);
    stars.push(star);
    angle = Math.random() * Math.PI * 2;
    delay = Math.random() * duration;
    tl.set(star, {display:"block"}, delay);
    if (_isOldIE) {
      //IE8 and earlier perform better when animating top/left/width/height instead of x/y/scale.
      TweenLite.set(star, {width:1, height:1, top:centerY, left:centerX});
      tl.add( new TweenMax(star, duration, {
        top:(centerY + Math.sin(angle) * radius) | 0,
        left:(centerX + Math.cos(angle) * radius) | 0,
        width:22,
        height:22,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    } else {
      TweenLite.set(star, {scale:0.05, top:centerY, left:centerX, z:0.1});
      tl.add( new TweenMax(star, duration, {
        y:Math.sin(angle) * radius,
        x:Math.cos(angle) * radius,
        scale:1.5,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    }
  }
  tl.fromTo(text, 3, {scale:0.1, y:centerY-36, z:0.1}, {scale:1.8, ease:SlowMo.ease.config(0.5, 0.4)}, 0.3);
  tl.fromTo(text, 3, {opacity:0}, {autoAlpha:1, ease:SlowMo.ease.config(0.5, 0.4, true)}, 0.3);
  tl.set(stars, {display:"none"});
  return tl;
}
function performance2() {
  var tl = new TimelineLite(),
      text = $("#performance2"),
      duration = 0.6,
      i = 45,
      repeats = 2,
      stars = [],
      star, angle, delay;
  while (--i > -1) {
    star = $("<img class='star' src='http://www.greensock.com/js/img/dot.png'/>").appendTo(bg);
    stars.push(star);
    angle = Math.random() * Math.PI * 2;
    delay = Math.random() * duration;
    tl.set(star, {display:"block"}, delay);
    if (_isOldIE) {
      //IE8 and earlier perform better when animating top/left/width/height instead of x/y/scale.
      TweenLite.set(star, {width:1, height:1, top:centerY, left:centerX});
      tl.add( new TweenMax(star, duration, {
        top:(centerY + Math.sin(angle) * radius) | 0,
        left:(centerX + Math.cos(angle) * radius) | 0,
        width:22,
        height:22,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    } else {
      TweenLite.set(star, {scale:0.05, top:centerY, left:centerX, z:0.1});
      tl.add( new TweenMax(star, duration, {
        y:Math.sin(angle) * radius,
        x:Math.cos(angle) * radius,
        scale:1.5,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    }
  }
  tl.fromTo(text, 3, {scale:0.1, y:centerY-36, z:0.1}, {scale:1.8, ease:SlowMo.ease.config(0.5, 0.4)}, 0.3);
  tl.fromTo(text, 3, {opacity:0}, {autoAlpha:1, ease:SlowMo.ease.config(0.5, 0.4, true)}, 0.3);
  tl.set(stars, {display:"none"});
  return tl;
}
function performance3() {
  var tl = new TimelineLite(),
      text = $("#performance3"),
      duration = 0.6,
      i = 45,
      repeats = 2,
      stars = [],
      star, angle, delay;
  while (--i > -1) {
    star = $("<img class='star' src='http://www.greensock.com/js/img/dot.png'/>").appendTo(bg);
    stars.push(star);
    angle = Math.random() * Math.PI * 2;
    delay = Math.random() * duration;
    tl.set(star, {display:"block"}, delay);
    if (_isOldIE) {
      //IE8 and earlier perform better when animating top/left/width/height instead of x/y/scale.
      TweenLite.set(star, {width:1, height:1, top:centerY, left:centerX});
      tl.add( new TweenMax(star, duration, {
        top:(centerY + Math.sin(angle) * radius) | 0,
        left:(centerX + Math.cos(angle) * radius) | 0,
        width:22,
        height:22,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    } else {
      TweenLite.set(star, {scale:0.05, top:centerY, left:centerX, z:0.1});
      tl.add( new TweenMax(star, duration, {
        y:Math.sin(angle) * radius,
        x:Math.cos(angle) * radius,
        scale:1.5,
        ease:Cubic.easeIn,
        repeat:repeats,
        repeatDelay:Math.random() * duration}),
             delay);
    }
  }
  tl.fromTo(text, 3, {scale:0.1, y:centerY-36, z:0.1}, {scale:1.8, ease:SlowMo.ease.config(0.5, 0.4)}, 0.3);
  tl.fromTo(text, 3, {opacity:0}, {autoAlpha:1, ease:SlowMo.ease.config(0.5, 0.4, true)}, 0.3);
  tl.set(stars, {display:"none"});
  return tl;
}
function compatibility() {


  var tl = new TimelineLite(),
      iconTimeline = new TimelineMax({repeat:1}),
      icons = $("#browserIcons img"),
      text = $("#compatibility"),
      split = new SplitText(text, {split:"chars", absolute:true}),
      rough = RoughEase.ease.config({strength:2, clamp:true}),
      i;

  for (i = 0; i < icons.length; i++) {
    iconTimeline.fromTo(icons[i], 0.6, {scaleX:0, opacity:0.4, z:0.1}, {autoAlpha:1, scaleX:1, ease:Power2.easeOut});
    iconTimeline.to(icons[i], 0.6, {scaleX:0, opacity:0.4, ease:Power2.easeIn});
    iconTimeline.set(icons[i], {visibility:"hidden"});
  }
  tl.add(iconTimeline, 0);
  tl.fromTo("#browserIcons", 2.8, {transformOrigin:"center -160px", rotation:170, z:0.1}, {rotation:0, ease:Elastic.easeOut}, 0);
  tl.set(text, {y: centerY-35, x:10, autoAlpha:1}, 0);
  for (i = 0; i < split.chars.length; i++) {
    tl.fromTo(split.chars[i], 2.4, {transformOrigin:"center -160px", z:0.1, rotation:((Math.random() < 0.5) ? 90 : -90)}, {rotation:0, ease:Elastic.easeOut}, 0.1 + i * 0.01);
    
    tl.to(split.chars[i], 0.6, {y:97, ease:Bounce.easeOut}, 2.5 + Math.random() * 0.6);
    tl.to(split.chars[i], 0.6, {autoAlpha:0, ease:rough}, 2.5 + Math.random());
    tl.to("#browserIcons", 0.5, {autoAlpha:0},3.5);
  }



  TweenLite.set("#fallDown", {width:420, left:300, top:-15, autoAlpha:0, textAlign:"left"});
  tl.to("#fallDown", 1, {top:81, autoAlpha:1, ease:Back.easeOut}, 3.9);
  /*tl.to("#browserIcons", 0.5, {autoAlpha:0}, 8);*/
  tl.to("#fallDown", 2, {left:"-=200", autoAlpha:0, ease:Power1.easeIn}, 5);


   TweenLite.set("#fallDown1", {width:420, left:300, top:-15, autoAlpha:0, textAlign:"left"});
  tl.to("#fallDown1", 1, {top:81, autoAlpha:1, ease:Back.easeOut}, 6.9);
  /*tl.to("#browserIcons", 0.5, {autoAlpha:0}, 8);*/
  tl.to("#fallDown1", 2, {left:"-=200", autoAlpha:0, ease:Power1.easeIn}, 8);
  
  TweenLite.set("#fallDown2", {width:420, left:300, top:-15, autoAlpha:0, textAlign:"left"});
  tl.to("#fallDown2", 1, {top:81, autoAlpha:1, ease:Back.easeOut}, 9.9);
    /*tl.to("#browserIcons", 0.5, {autoAlpha:0}, 8);*/
  tl.to("#fallDown2", 2, {left:"-=200", autoAlpha:0, ease:Power1.easeIn}, 11);
  

  TweenLite.set("#fallDown3", {width:420, left:300, top:-15, autoAlpha:0, textAlign:"left"});
  tl.to("#fallDown3", 1, {top:81, autoAlpha:1, ease:Back.easeOut}, 12.9);
   /*tl.to("#browserIcons", 0.5, {autoAlpha:0}, 8);*/
  tl.to("#fallDown3", 2, {left:"-=200", autoAlpha:0, ease:Power1.easeIn}, 14);

  TweenLite.set("#fallDown4", {width:420, left:300, top:-15, autoAlpha:0, textAlign:"left"});
  tl.to("#fallDown4", 1, {top:81, autoAlpha:1, ease:Back.easeOut}, 15.9);
    /*tl.to("#browserIcons", 0.5, {autoAlpha:0}, 8);*/
  tl.to("#fallDown4", 2, {left:"-=200", autoAlpha:0, ease:Power1.easeIn}, 17);

  TweenLite.set("#fallDown5", {width:420, left:300, top:-15, autoAlpha:0, textAlign:"left"});
  tl.to("#fallDown5", 1, {top:81, autoAlpha:1, ease:Back.easeOut}, 18.9);
    /*tl.to("#browserIcons", 0.5, {autoAlpha:0}, 8);*/
  tl.to("#fallDown5", 2, {left:"-=200", autoAlpha:0, ease:Power1.easeIn}, 20);
  
  
  return tl;
}


/*

function control() {
  var dots = new TimelineLite({paused:true}),
      tl = new TimelineLite(),
      qty = 30,
      duration = 2.5,
      xProp = _isOldIE ? "left" : "x",
      yProp = _isOldIE ? "top" : "y",
      colors = ["#91e600","#84d100","#73b403","#528003"],
      startVars = {css:{}},
      initialVars = {css:{borderRadius:"50%", width:100, z:0.1}, immediateRender:true},
      split = new SplitText("#controlSub", {split:"words", absolute:"true"}),
    pause = split.words[0],
      play = split.words[1],
      reverse = split.words[2],
      timeScale = [split.words[3], split.words[4]],
      subEnd = [split.words[5], split.words[6], split.words[7], split.words[8]],
      dot, i, delay;
  startVars.css[xProp] = initialVars.css[xProp] = 680;
  startVars.css[yProp] = initialVars.css[yProp] = 220;
  for (i = 0; i < qty; i++) {
    dot = $("<div class='dot'/>").appendTo(bg)[0];
    initialVars.css.width = initialVars.css.height = ((Math.random() * 15 + 10) | 0);
    initialVars.css.backgroundColor = colors[(Math.random() * colors.length) | 0];
    TweenLite.set(dot, initialVars);
    delay = Math.random() * duration;
    dots.to(dot, duration, {physics2D:{velocity:Math.random() * 300 + 150, angle:Math.random() * 40 + 250, gravity:400, xProp:xProp, yProp:yProp}}, delay);
    dots.fromTo(dot, duration, startVars, {physics2D:{velocity:Math.random() * 300 + 150, angle:Math.random() * 60 + 240, gravity:400, xProp:xProp, yProp:yProp}, immediateRender:false, overwrite:"none"}, delay + duration);
    dots.fromTo(dot, duration, startVars, {physics2D:{velocity:Math.random() * 300 + 150, angle:Math.random() * 60 + 240, gravity:400, xProp:xProp, yProp:yProp}, immediateRender:false, overwrite:"none", display:"none"}, delay + duration * 2);
  }
  //tl.to(dots, 2.2, {time:2.2, ease:Linear.easeNone}, 0);
  tl.from("#control", 0.5, {left:"+=100", autoAlpha:0}, 0);
  
 // tl.from(play, 1, {autoAlpha:0, scale:2}, 0);
 // tl.from(dots, 10, {time:dots.duration(), ease:Linear.easeNone}, 1.2);

    tl.to(dots, 10, {time:dots.duration(), ease:Linear.easeNone}, 1.2);
  


  //tl.staggerTo(["#control", "#controlSub"], 0.8, {left:"-=100", autoAlpha:0, ease:Power1.easeIn}, 0.15, 0);
  return tl;
}

*/

function newStandard() {
  var tl = new TimelineLite(),
      GSAP = document.getElementById("GSAP"),
      split = new SplitText(GSAP, {type:"chars", position:"absolute"}),
      chars = split.chars,
      positions = [chars[0].offsetLeft],
      i, xOffset;
  positions[5] = chars[1].offsetLeft;
  positions[9] = chars[2].offsetLeft;
  positions[18] = chars[3].offsetLeft;

  split.revert();
  GSAP.innerHTML = "The Best Choice For You";
  split.split({type:"words,chars"});
  tl.staggerFrom(split.words, 1.5, {z:-1000, autoAlpha:0, ease:Power1.easeOut}, 0.3);
  
  if (!_isOldIE) {
    chars = split.chars;
    for (i = 0; i < chars.length; i++) {
      TweenLite.set(chars[i], {force3D:true});
     /* if (positions[i]) {
        xOffset = positions[i] - (chars[i].offsetLeft + chars[i].parentNode.offsetLeft);
        tl.to(chars[i], 3, {bezier:{values:[{x:20, y:0}, {x:40, y:0}, getRandomPosition(chars[i], true), {x:xOffset - 100, y:0}, {x:xOffset - 10, y:0}, {x:xOffset, y:0}], autoRotate:true}, ease:Power2.easeInOut, color:"#91e600"}, i * 0.05 + 5);
      } else {*/
        tl.to(chars[i], 3, {bezier:{values:[{x:20, y:0}, {x:40, y:0}, getRandomPosition(chars[i], true), getRandomPosition(chars[i], false)], autoRotate:true}, ease:Power2.easeInOut}, i * 0.05 + 5);
        tl.set(chars[i], {visibility:"hidden"}, 8 + i * 0.05);

      /*}*/
    }
  }
  


  tl.from("#newStandardText", 0.6, {autoAlpha:0,scale:2});
  return tl;
}

function getRandomPosition(element, inside) {
  var xStart = element.offsetLeft + element.parentNode.offsetLeft;
  return {x:Math.random() * 950 - xStart, y:(inside ? Math.random() * 160 - 80 : (Math.random() < 0.5) ? 200 : -200)};
}

function replayReveal() {
  var tl = new TimelineLite(),
      $replayIcon = $("#replayIcon"),
      $replay = $("#replay").mouseenter(function(){
        TweenLite.to($replayIcon, 0.4, {rotation:"+=360"});
        TweenLite.to($replay, 0.4, {opacity:1});
      }).mouseleave(function(){
        TweenLite.to($replay, 0.4, {opacity:0.65});
      }).click(function(){
        master.restart();
      });
  tl.from($replay, 1, {autoAlpha:0, scale:2});
  tl.from($replayIcon, 0.5, {rotation:"360_ccw"});
  return tl;
}
TweenLite.set("#featureAnimation", {perspective:700, visibility:"visible"});

/*fin animation video greensock*/


/*fin animation paragraphe*/



/* animation carousel*/
var imgWrapper = $("#img-wrapper"),
    images = $(".rotating-img"),
    tl = new TimelineMax({repeat:-1});

TweenLite.set(imgWrapper, {perspective:500});
TweenLite.set(images, {rotationY:180});
TweenLite.set(images[0], {rotationY:0});

for(var i = 0; i < images.length; i++)
{
  var nextImage = (i+1) == images.length ? images[0] : images[i+1];
  tl
    .to(images[i], 2, {rotationY:'-180_ccw'}, (2 * i))
    .to(nextImage, 2, {rotationY:'0_ccw'}, (2 * i));
}



})(jQuery);