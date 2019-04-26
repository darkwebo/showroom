<?php
include'config.php';

class Main
{
public 	$conn;
function __construct()
{
	$c= new config();
	$this->conn=$c->connexion();
}
function searchgoogle($mot,$conn)
{
$req="SELECT * FROM site where Mot like '%".$mot."%'";	
$res=$conn->query($req);
return $res->fetchAll();
}
}
$mot = $_GET['mot'] ;
$m=new main();
$tab=$m->searchgoogle($mot,$m->conn);
?>
<table>
<?php 
foreach($tab as $row)
{
	
echo "<tr>";
echo 	"<td><a href='".'http://'.$row['lien']."' target=' _blank'>lien ici</td>";
echo "<tr>";
echo "<tr>";
echo 	"<td>".$row['description']."</td>";
echo "<tr>";
}
?>