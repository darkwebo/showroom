<HTML>
<head>
</head>
<body>
<?PHP
include "../entites/facture.php";
include "../core/factureC.php";
if (isset($_GET['id_produit'])){
	$factureC=new factureC();
    $result=$factureC->recupererFacture($_GET['id_produit']);
	foreach($result as $row){
	$prenom=$row['prenom'];
		$nom=$row['nom'];
		$cin=$row['cin'];
    $id_produit=$row['id_produit'];
    $nom_produit=$row['nom_produit'];
    $quantite=$row['quantite'];
    $prix=$row['prix'];
    $date=$row['date'];
?>
<form method="POST">
<table>
<caption>Modifier Facture</caption>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>

<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>

<tr>
<td>cin</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>

<tr>
<td>id_produit</td>
<td><input type="number" name="tarifH" value="<?PHP echo $id_produit ?>"></td>
</tr>
<tr>
<td>nom_produit</td>
<td><input type="text" name="nom_produit" value="<?PHP echo $nom_produit ?>"></td>
</tr>

<tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>

<tr>
<td>prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
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
	$facture=new Facture($_POST['prenom'],$_POST['nom'],$_POST['cin'],$_POST['id_produit'],$_POST['nom_produit'],$_POST['quantite'],$_POST['prix'],$_POST['date']);
	$factureC->modifierFacture($facture,$_POST['id_produit']);
	echo $_POST['id_produit'];
	header('Location: afficherFacture.php');
}
?>
</body>
</HTMl>
