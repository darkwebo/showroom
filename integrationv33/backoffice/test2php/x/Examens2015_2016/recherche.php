<html>
	<head>
	<meta charset="utf-8" />
		<title>Interface Recherche</title>
		<script language="javascript" src="jquery.js"></script>	
		<script language="javascript" src="search.js"></script>		
		<script language="javascript" src="recherche.js"></script>
		<script language="javascript">
			$(document).ready(function(){
				$("#search").keyup(function(){
				var chaine = document.getElementById("search").value;//alert(chaine.length );
					if(chaine.length < 4)
					{
							$("#search").css("border-color","red");
					
					}
					else 
					{
						$("#search").css("border-color","green");
					}
				});
			
			
			});
		
		</script>
		<link type="text/css" rel="stylesheet" href="styleR.css" />
		
	</head>
	<body>
	<h1 class="titre" style="color:red;">Interface de Recherche</h1>
	
	<div id="divR">
       <h2 class="filtre">Les meilleurs produits aux meilleurs prix!!!</h2>	
		<form name="f" id="formR">
			Nom de téléphone ou marque
			<input type="text" name="search" id="search" onkeyup = "recherche()" />
			<?php $link = mysql_connect("localhost","root","");
//connexion à la base de données
mysql_select_db("vente", $link) or die("connexion impossible");
			?>
		</form>
		<div id="zone">
		<h2 class="filtre">Liste des produits</h2>
			<table border="2">
		<?php 
			$req = "SELECT * FROM `vente`;";
			$data = mysql_query($req);
		?>
				<th>Nom de téléphone</th>
				<th>Marque</th>
				<th>Prix</th>
				<th>Catégorie</th>
				<?php While($d = mysql_fetch_array($data)) { ?>
							
						
				<tr>
					<td><?php echo $d['Nom_tel']; ?></td>
					<td><?php echo $d['Marque']; ?></td>
					<td><?php echo $d['Prix']; ?></td>
					<td><?php echo $d['Categorie']; ?></td>
				</tr>
				<?php } ?>
			</table>
				
		</div>
		</div>
	</body>
</html>