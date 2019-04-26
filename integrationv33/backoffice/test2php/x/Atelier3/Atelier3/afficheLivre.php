<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<h2>Affichage des livres</h2>
	<table border="1">
		<th>Référence</th>
		<th>Nom</th>
		<th>Date de création</th>
		<th>Prix</th>
		<th>Auteur</th>
		<th>Nombre de pages</th>
		<th>Suppression</th>
		<th>Modification</th>
		<?php 
		include("config.php");
		include("livre.php");
		$c = new config();
		$conn = $c->getConnexion();
		$livre=new Livre("Liv12333","Symfony",2007-12-11,120,'3A',444);
		$list=$livre->afficheLivre($conn);
	
		foreach($list as $l)
		{
		?>
		<tr>
			<td><?php echo $l["reference"] ?></td>
			<td><?php echo $l[1] ?></td>
			<td><?php echo $l[2] ?></td>
			<td><?php echo $l[3] ?></td>
			<td><?php echo $l[4] ?></td>
			<td><?php echo $l[5] ?></td>
			<td><a href="suppLivre.php?ref=<?php echo $l[0] ?>">Supprimer</a></td>
			<td><a href="modifLivre.php?ref=<?php echo $l[0] ?>&nom=<?php echo $l[1] ?>&date=<?php echo $l[2] ?>&prix=<?php echo $l[3] ?>&auteur=<?php echo $l[4] ?>&nb=<?php echo $l[5] ?>">Modifier</a></td>
		</tr>
		<?php } ?>
	</table>
	<a href="ajoutDocumentV2.html"><button>Interface d'ajout</button></a>
