<?php
include "../core/factureC.php";
$facture1C=new factureC();
$listeFactures=$facture1C->afficherFactures();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Prenom</td>
<td>Nom</td>
<td>cin</td>
<td>id_produit</td>
<td>nom_produit</td>
<td>quantite</td>
<td>prix</td>
<td>date</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?php
foreach($listeFactures as $row){
	?>
	<tr>
    <td><?php echo $row['prenom']; ?></td>
	<td><?php echo $row['nom']; ?></td>
  	<td><?php echo $row['cin']; ?></td>
  	<td><?php echo $row['id_produit']; ?></td>
    	<td><?php echo $row['nom_produit']; ?></td>
      	<td><?php echo $row['quantite']; ?></td>
      	<td><?php echo $row['prix']; ?></td>
        	<td><?php echo $row['date']; ?></td>
	<td><form method="POST" action="supprimerFacture.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?php echo $row['prenom']; ?>" name="prenom">
	</form>
	</td>
	<td><a href="modifierFacture.php?id_produit=<?php echo $row['id_produit']; ?>">
	Modifier</a></td>
	</tr>
	<?php
}
?>
</table>
