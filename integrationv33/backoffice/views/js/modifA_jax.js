
function modifier_Ajax(i){
    console.log(document.getElementById('prixUnitaire'+i).value);
            var id = document.getElementById('id'+i).value;
            var prixUnitaire = parseFloat(document.getElementById('prixUnitaire'+i).value);
            var quantite = parseInt(document.getElementById('quantite'+i).value);
            $.post('modifierCommande.php',
            {id:id, prixUnitaire:prixUnitaire, quantite:quantite},
            function(data){
                document.getElementById('total'+i).value=prixUnitaire*quantite;
            });
}