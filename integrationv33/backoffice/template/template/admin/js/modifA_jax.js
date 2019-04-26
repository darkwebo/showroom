$(document).ready(function(){
	modifier_Ajax();
});

function modifier_Ajax(){
    $('#quantite').click(function(){
            var id = document.getElementById('id').value;
            var prixUnitaire = parseFloat(document.getElementById('prixUnitaire').value);
            var quantite = parseInt(document.getElementById('quantite').value);
            $.post('modifierCommande.php',
            {id:id, prixUnitaire:prixUnitaire, quantite:quantite},
            function(data){
                document.getElementById('total').value=prixUnitaire*quantite;
            });
    });
}