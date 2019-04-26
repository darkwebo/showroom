<?PHP
include "../core/livreurC.php";
$livreur1C=new LivreurC();
$listelivreurs=$livreur1C->afficherlivreurs();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>idP</td>
<td>Nom</td>
<td>Prenom</td>
<td>Tarif</td>
<td>Nbh</td>>
</tr>

<?PHP
foreach($listelivreurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['idP']; ?></td>
	<td><?PHP echo $row['nomP']; ?></td>
	<td><?PHP echo $row['prenomP']; ?></td>
	<td><?PHP echo $row['tarif']; ?></td>
	<td><?PHP echo $row['nbh']; ?></td>
	
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
	</form>
	</td>
	<td><a href="modifierlivreur.php?idP=<?PHP echo $row['idP']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

