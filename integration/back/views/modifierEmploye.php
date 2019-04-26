<HTML>
<head>
</head>
<body>
<?PHP
include "../entites/employe.php";
include "../core/employeC.php";
if (isset($_GET['id'])){
	$employeC=new EmployeC();
    $result=$employeC->recupererEmploye($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$Produit=$row['Produit'];
		$PrixInit=$row['PrixInit'];
		$PrixFin=$row['PrixFin'];
		$Date=$row['Date'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Produit</td>
<td><input type="text" name="Produit" value="<?PHP echo $Produit ?>"></td>
</tr>
<tr>
<td>PrixInit</td>
<td><input type="text" name="PrixInit" value="<?PHP echo $PrixInit ?>"></td>
</tr>
<tr>
<td>PrixFin</td>
<td><input type="number" name="PrixFin" value="<?PHP echo $PrixFin ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="text" name="Date" value="<?PHP echo $Date ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$employe=new employe($_POST['id'],$_POST['Produit'],$_POST['PrixInit'],$_POST['PrixFin'],$_POST['Date']);
	$employeC->modifierEmploye($employe,$_POST['id']);
	echo $_POST['id'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>