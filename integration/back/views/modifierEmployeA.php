<HTML>
<head>
</head>
<body>
<?PHP
include "../entites/employeA.php";
include "../core/employeA.php";
if (isset($_GET['id'])){
	$employeC=new EmployeA1();
    $result=$employeC->recupererEmployeA($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$date=$row['date'];
		$heure=$row['heure'];
		$lieu=$row['lieu'];
		$sujet=$row['sujet'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>Heure</td>
<td><input type="text" name="heure" value="<?PHP echo $heure ?>"></td>
</tr>
<tr>
<td>Lieu</td>
<td><input type="text" name="lieu" value="<?PHP echo $lieu ?>"></td>
</tr>
<tr>
<td>Sujet</td>
<td><input type="text" name="sujet" value="<?PHP echo $sujet ?>"></td>
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
	$employe=new employeA($_POST['id'],$_POST['date'],$_POST['heure'],$_POST['lieu'],$_POST['sujet']);
	$employeC->modifierEmployeA($employe,$_POST['id']);
	echo $_POST['id'];
	header('Location: afficherEmployeA.php');
}
?>
</body>
</HTMl>