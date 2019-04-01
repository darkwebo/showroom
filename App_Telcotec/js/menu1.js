
(function($){

$(".a1").hide();
$(".a2").hide();

$(".aa1").mouseover(function(){
$(".a2").hide("slow");
$(".a1").show("slow");

});
$(".aa2").mouseover(function(){
$(".a1").hide("slow");
$(".a2").show("slow");
});

$(".aa1").mouseout(function(){
$(".a1").hide("slow");

});

$(".aa2").mouseout(function(){
$(".a2").hide("slow");

});


})(jQuery);











