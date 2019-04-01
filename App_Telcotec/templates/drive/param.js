$(function () {
$('#contenu1').hide();
$('#contenu2').hide();

$('.titre1').click(function()
   {
   $('#contenu2').hide();
   $('#contenu1').show();
  
   });
   $('.titre2').click(function()
   {
   $('#contenu1').hide();
   $('#contenu2').show();
  
   });
   $('#ferme').click(function()
   {
   $('#contenu1').hide();
   $('#contenu2').hide();

   });




});