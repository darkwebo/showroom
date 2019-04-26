<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<h2>Affichage des CDs</h2>
	<table border="1">
		<th>Référence</th>
		<th>Nom</th>
		<th>Date de création</th>
		<th>Prix</th>
		<th>Auteur</th>
		<th>Durée</th>
		<th>Capacité</th>
		<?php 
		include("config.php");
		include("cd.php");
		$c = new config();
		$conn = $c->getConnexion();
		$cd=new CD("CD12333","Video Installation Symfony3",2007-12-11,120,'3A','20min','100Mo');
		$list=$cd->afficheCD($conn);
	
		foreach($list as $l)
		{
		?>
		<tr>
			<td><?php echo $l["reference"] ?></td>
			<td><?php echo $l[1] ?></td>
			<td><?php echo $l[2] ?></td>
			<td><?php echo $l[3] ?></td>
			<td><?php echo $l[4] ?></td>
			<td><?php echo $l[6] ?></td>
			<td><?php echo $l[7] ?></td>
			
		</tr>
		<?php } ?>
	</table>
	<a href="ajoutDocumentV2.html"><button>Interface d'ajout</button></a>
