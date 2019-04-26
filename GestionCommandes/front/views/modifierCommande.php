<HTML>
<head>
</head>
<body>
<?PHP
include "../entites/commande.php";
include "../core/commandeC.php";
if (isset($_GET['id_produit'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recupererCommande($_GET['id_produit']);
	foreach($result as $row){
	$prenom=$row['prenom'];
		$nom=$row['nom'];
		$numero=$row['numero'];
		$adresse=$row['adresse'];
    $id_produit=$row['id_produit'];
    $quantite=$row['quantite'];
    $prixUnitaire=$row['prixUnitaire'];
    $details=$row['details'];
?>
<form method="POST">
<table>
<caption>Modifier Commande</caption>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>

<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>

<tr>
<td>numero</td>
<td><input type="number" name="numero" value="<?PHP echo $numero ?>"></td>
</tr>

<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>

<tr>
<td>id_produit</td>
<td><input type="number" name="tarifH" value="<?PHP echo $id_produit ?>"></td>
</tr>

<tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>

<tr>
<td>prixUnitaire</td>
<td><input type="number" name="prixUnitaire" value="<?PHP echo $prixUnitaire ?>"></td>
</tr>
<tr>
<td>details</td>
<td><input type="text" name="details" value="<?PHP echo $details ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_produit" value="<?PHP echo $_GET['id_produit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new Commande($_POST['prenom'],$_POST['nom'],$_POST['numero'],$_POST['adresse'],$_POST['id_produit'],$_POST['quantite'],$_POST['prixUnitaire'],$_POST['details']);
	$commandeC->modifierCommande($commande,$_POST['id_produit']);
	echo $_POST['id_produit'];
	header('Location: afficherCommande.php');
}
?>
</body>
</HTMl>
