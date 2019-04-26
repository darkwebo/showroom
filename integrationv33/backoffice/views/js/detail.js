$(document).ready(function(){

	$('#detail').click(function(){

		$.post('afficher_detail.php',{detail:detail},function(data){

			$('#detail_commande div').html(data);
		});
	});
});