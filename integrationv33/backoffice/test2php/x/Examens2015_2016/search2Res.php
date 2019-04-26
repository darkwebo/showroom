<html>
	<head>
	<meta charset="utf-8" />
	</head>
<?php
$f = $_GET['search'];
$link = mysql_connect("localhost","root","");
//connexion à la base de données
mysql_select_db("vente", $link) or die("connexion impossible");
$req = "SELECT * FROM `vente` WHERE Nom_tel like '%".$f."%' or Marque like '%".$f."%';";
$data = mysql_query($req);
//$ligne=mysql_fetch_row($resultat);
?>
<h2>Liste des produits</h2>
<table border="2">
		
				<th>Nom de t&eacutel&eacutephone</th>
				<th>Marque</th>
				<th>Prix</th>
				<th>Cat&eacutegorie</th>
				<?php While($d = mysql_fetch_array($data)) { ?>
							
						
				<tr>
					<td><?php echo $d['Nom_tel']; ?></td>
					<td><?php echo $d['Marque']; ?></td>
					<td><?php echo $d['Prix']; ?></td>
					<td><?php echo $d['Categorie']; ?></td>
				</tr>
				<?php } ?>
			</table>