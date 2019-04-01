<?php
include "../core/commandeC.php";
$commande1C=new CommandeC();
$listeCommandes=$commande1C->trierCommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Prenom</td>
<td>Nom</td>
<td>numero</td>
<td>adresse</td>
<td>id_produit</td>
<td>quantite</td>
<td>prixUnitaire</td>
<td>details</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?php
foreach($listeCommandes as $row){
	?>
	<tr>
    <td><?php echo $row['prenom']; ?></td>
	<td><?php echo $row['nom']; ?></td>
	<td><?php echo $row['numero']; ?></td>
	<td><?php echo $row['adresse']; ?></td>
  	<td><?php echo $row['id_produit']; ?></td>
    	<td><?php echo $row['quantite']; ?></td>
      	<td><?php echo $row['prixUnitaire']; ?></td>
        	<td><?php echo $row['details']; ?></td>
	<td><form method="POST" action="supprimerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?php echo $row['prenom']; ?>" name="prenom">
	</form>
	</td>
	<td><a href="modifiercommandeAdmin.php?id_produit=<?php echo $row['id_produit']; ?>">
	Modifier</a></td>
	</tr>
	<?php
}
?>
</table>
