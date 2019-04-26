<?PHP
include "../core/livraisonC.php";
$livraison1C=new LivraisonC();
$listelivraisons=$livraison1C->afficherlivraisons();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>idL</td>
<td>Adresse</td>
<td>Dat</td>
</tr>

<?PHP
foreach($listelivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['idL']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['dat']; ?></td>
	<td><form method="POST" action="supprimerlivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idL']; ?>" name="idL">
	</form>
	</td>
	<td><a href="modifierlivraison1.php?idL=<?PHP echo $row['idL']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

