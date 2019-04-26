<?PHP
include "../core/employeA.php";
$employe1C=new EmployeA1();
$listeEmployes=$employe1C->afficherEmployesA();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>date</td>
<td>heure</td>
<td>lieu</td>
<td>sujet</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['heure']; ?></td>
	<td><?PHP echo $row['lieu']; ?></td>
	<td><?PHP echo $row['sujet']; ?></td>
	<td><form method="POST" action="supprimerEmployeA.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierEmployeA.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


