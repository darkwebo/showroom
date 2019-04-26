<?PHP
include "../core/competitionC.php";
$competition1C=new CompetitionC();
$listeCompetitions=$competition1C->afficherCompetitions();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>nom</td>
<td>nom_c_s</td>
<td>heure</td>
<td>date</td>
<td>cout</td>
<td>type</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCompetitions as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['nom_c_s']; ?></td>
	<td><?PHP echo $row['heure']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['cout']; ?></td>
  <td><?PHP echo $row['type']; ?></td>

	<td><a href="modifierCompetition.php?nom=<?PHP echo $row['nom']; ?>">
	modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
