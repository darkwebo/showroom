/*
<div id="mybox"> 
	<div id="mybox_aplat"></div>
	<div id="mybox_loader"></div>
    <div id="mybox_conteneur">
		<div id="mybox_relative">
		<div id="mybox_close"></div>
		<div id="mybox_contenu">
		<img src="ali.jpg" alt="image"/>
		</div>
		</div>
    </div>
</div>
*/
$(document).ready(function() {
	mybox.init();
});

mybox={

init: function() {
		mybox.opacite=0.70;
		mybox.duree=1000;
		$("a[rel='mybox']").click(function() {
			mybox.lien=$(this).attr("href");
			mybox.formule=$('input[type="hidden"]#'+$(this).attr('alt')).val();
			mybox.open(mybox.lien);
			/*alert(mybox.lien);*/
			return false;
		});
		$(window).resize(mybox.redim);			
},
open: function(lien)
{
		mybox.lien=lien;
		$("body").append(' <div id="mybox"> <div id="mybox_aplat"></div><div id="mybox_loader"></div><div id="mybox_conteneur"><div id="mybox_relative"><div id="mybox_close"></div><div id="mybox_contenu"><textarea rows="18" cols="46" name="formule" id="toto" >'+mybox.formule+'</textarea></div></div></div></div>');
		$("#mybox_conteneur").hide();	
		$("#mybox_loader").hide().fadeIn();	
		$("#mybox_aplat").css("opacite",0).fadeTo(500,mybox.opacite);			
		mybox.img=new Image();
	    mybox.img.src=mybox.lien;
		mybox.timer=window.setInterval(mybox.load,100);
		
		$("#mybox_close").click(mybox.close);
		$("#mybox_aplat").click(mybox.close);
		
//<pre>'+mybox.formule+'</pre>

},
load: function()
{
if(mybox.img.complete)
{
window.clearInterval(mybox.timer);

mybox.anim();
}
},
anim:function(){
$("#mybox_conteneur").show();
mybox.largeur=400;
mybox.hauteur=300;
mybox.redim();

$("#mybox_loader").fadeOut();
$("#mybox_contenu").append('<img src="'+mybox.lien+'"/>');
$("#mybox_contenu img").hide();
$("#mybox_close").hide();
$("#mybox_contenu").animate({width:mybox.largeur},mybox.duree/2).animate({height:mybox.hauteur},mybox.duree/2,"easeOutQuad", function(){
$("#mybox_close").fadeIn();
$("#mybox_contenu img").fadeIn();
});
},
/*pour conserver la taille si on redimentionne la fenetre*/redim: function()
{
$("#mybox_conteneur").css("left",(mybox.windowW()-mybox.largeur)/2+"px");
$("#mybox_conteneur").css("top",(mybox.windowH()-mybox.hauteur)/2+"px");
},
close: function()
{
$("#mybox").fadeOut(500,function(){
    $("#mybox").remove();
})
},
windowH: function ()
{
if(window.innerHeight) return window.innerHeight;
else{return $(window).height();}
},
windowW: function ()
{
if(window.innerWidth) return window.innerWidth;
else{return $(window).width();}
}
}