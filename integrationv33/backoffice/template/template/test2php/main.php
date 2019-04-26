<?php
include 'client.php';
include 'config.php';
class Main
{
	public $conn;
	function __construct ()
	{
		$c = new config();
		$this->conn=$c->connexion();
	}
	function ajouterClient($conn,$e)
	{
		$req = "INSERT INTO `client`(`nom`, `qte`, `prix`,`img`,`date`) VALUES ('".$e->getNom()."','".$e->getQte()."','".$e->getPrix()."','".$e->getImg()."',now())";
		$conn->query($req);
	}
	function affichage($conn){
		$req="select * from client";
		$res=$conn->query($req);
		return $res->fetchAll();
	}
	function supprimer($id,$conn){
		$req="DELETE FROM `client` WHERE id='$id'";
		$conn->query($req);
	}
}
$m=new Main();
if(isset($_POST['ajout'])){
	$e=new client($_POST['nom'],$_POST['qte'],$_POST['prix'],$_POST['img']);
	$m->ajouterClient($m->conn,$e);

	echo "<h1>Ajoutéééééé avec succèsss</h1>";
	
}else if(isset($_POST['affich'])){
		
$tab=$m->affichage($m->conn);
?>
<form method="get" action="main.php">
<table border="1"> 
<tr>
<td>Nom</td><td>Prenom</td><td>age</td><td>Classe</td><td>Supprimer</td>
</tr>
<?php
foreach ($tab as $i){
	echo"<tr>";
	echo"<td>".$i[1]."</td>";
	echo"<td>".$i[2]."</td>";
	echo"<td>".$i[3]."</td>";
	echo"<td>".$i[4]."</td>";
	echo"<td>".$i[5]."</td>";
?>
<td><input type="radio" name="id" value="<?php echo $i[0];?>"></td>
<?php
echo"</td>";
}
?>
<input type="submit" value="supp" name="supprimer">
<?php
}
else if (isset($_GET['supprimer']))
{
	//echo $_GET['id'];
	$m->supprimer($_GET['id'],$m->conn);
	header('location:formulaire.html');
}
?>
</table>
</form>