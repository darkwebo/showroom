(function($){


var container = $("#demo"),
    _sentenceEndExp = /(\.|\?|!)$/g; //regular expression to sense punctuation that indicates the end of a sentence so that we can adjust timing accordingly

//this function just takes a string of text and splits it into an array based on the maximum length that should be allowed to exist in each line, and when it encounters the end of a sentence (ending in ".", "?", or "!"), it will force a line break too.
function buildChunks(text, maxLength) {
  if (maxLength === undefined) {
    return text.split(" ");
  }
  var words = text.split(" "),
      wordCount = words.length,
      chunk = [],
      chunks = [], i;
  for (i = 0; i < wordCount; i++){
    chunk.push(words[i]);
    if (_sentenceEndExp.test(words[i]) || i === wordCount - 1 || chunk.join(" ").length + words[i+1].length > maxLength) {
      chunks.push(chunk.join(" "));
      chunk = [];
    }
  }
  return chunks;
}

function machineGun(chunks, maxLength) {
  //in case "chunks" isn't an array, we'll build chunks automatically
  if (!(chunks instanceof Array)) {
    chunks = buildChunks(chunks, maxLength);
  }
  
  var tl = new TimelineMax({delay:1, repeat:100000, repeatDelay:2}),
      time = 0,
      chunk, element, duration, isSentenceEnd, i;
  
  for (i = 0; i < chunks.length; i++) {
    chunk = chunks[i];
    isSentenceEnd = _sentenceEndExp.test(chunk) || (i === chunks.length - 1);
    element = $("<h3>" + chunk + "</h3>").appendTo(container);
      duration = Math.max(0.5, chunk.length * 0.08); //longer words take longer to read, so adjust timing. Minimum of 0.5 seconds.
      if (isSentenceEnd) {
        duration += 0.6; //if it's the last word in a sentence, drag out the timing a bit for a dramatic pause.
      }
      //set opacity and scale to 0 initially. We set z to 0.01 just to kick in 3D rendering in the browser which makes things render a bit more smoothly.
    TweenLite.set(element, {autoAlpha:0, scale:0, z:0.01});
    //the SlowMo ease is like an easeOutIn but it's configurable in terms of strength and how long the slope is linear. See http://www.greensock.com/v12/#slowmo and http://api.greensock.com/js/com/greensock/easing/SlowMo.html
    tl.to(element, duration, {scale:1.2,  ease:SlowMo.ease.config(0.25, 0.9)}, time)
      //notice the 3rd parameter of the SlowMo config is true in the following tween - that causes it to yoyo, meaning opacity (autoAlpha) will go up to 1 during the tween, and then back down to 0 at the end. 
		 	  .to(element, duration, {autoAlpha:1, ease:SlowMo.ease.config(0.25, 0.9, true)}, time);
      time += duration - 0.05;
      if (isSentenceEnd) {
        time += 0.6; //at the end of a sentence, add a pause for dramatic effect.
      }
    }
}

machineGun("Drive test     KPI         Key        Performance       Indicator    QoS          Quality          of           Service          RxPower       BLER       BestEcIo        SIR      BestRSCP      RxQual       RxLev", 12);

/* learn more about the GreenSock Animation Platfrom (GSAP) for JS
machineGun("These words are constantly animating in your face to suck you in and leave you hanging for what comes next. Can you handle the awesomeness? Or are you left quivering in fear? It's only text, silly. Longer chunks stay on the screen for a greater duration. The last line of each sentence takes longer too, with a dramatic pause. Yes, that pause. THE END", 12);
http://www.greensock.com/gsap-js/

watch a quick video on how TimelineLite allows you to sequence animations like a pro
http://www.greensock.com/sequence-video/

*/












})(jQuery);