<?PHP
include "../core/employeC.php";
$employe1C=new EmployeC();
$listeEmployes=$employe1C->afficherEmployes();

//var_dump($listeEmployes->fetchAll());
?>

<table border="1">
<tr>
<td>id</td>
<td>Produit</td>
<td>PrixInit</td>
<td>PrixFin</td>
<td>Date</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['Produit']; ?></td>
	<td><?PHP echo $row['PrixInit']; ?></td>
	<td><?PHP echo $row['PrixFin']; ?></td>
	<td><?PHP echo $row['Date']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierEmploye.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


