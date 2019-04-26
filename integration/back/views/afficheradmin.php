<?PHP
include "../core/adminC.php";
$admin1C=new adminC();
$listeadmins=$admin1C->afficheradmins();

//var_dump($listeEmployes->fetchAll());
?>
<h3 class="text-center text-info">la liste des admins</h3>
        <table class="table table-hover">
                <thead>
                  <tr>
                        
                        <th>identifiant</th>
                        
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>telephoneA</th>
                        <th>emailProf</th>
                        <th>numéro du fax</th>
                        <th>passwordA</th>
                        
                  </tr>

<?PHP
foreach($listeadmins as $row){
	?>
	<tr>
		 <td><?= $row['idA']; ?></td>
	 <td><?= $row['nomA']; ?></td>
                    <td><?= $row['prenomA']; ?></td>
                    <td><?= $row['telephoneA']; ?></td>
                    <td><?= $row['mailProf']; ?></td>
                    <td><?= $row['numFax']; ?></td>
                    <td><?= $row['passwordA']; ?></td>
                    



	<td><form method="POST" action="supprimeradmin.php">
	<input type="submit" name="supprimer" value="supprimer" onclick="return confirm('Do you want delete this record ?' );">
	<input type="hidden" value="<?PHP echo $row['idA']; ?>" name="idA" >
	</form>
	</td>
	<td><a href="modifieradmin.php?idA=<?PHP echo $row['idA']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

