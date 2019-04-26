<?PHP
include "../atelier3/compteC.php";
$compte1C=new CompteC();
$listeComptes=$compte1C->afficherComptes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>numCompte</td>
<td>solde</td>
<td>cin</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeComptes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['numCompte']; ?></td>
	<td><?PHP echo $row['solde']; ?></td>
	<td><?PHP echo $row['cin']; ?></td>

	<td><form method="POST" action="supprimerCompte.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierCompte.php?cin=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
