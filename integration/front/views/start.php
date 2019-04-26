<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
$livreur=new Livreur(75757575,'pizza',50,'dsqdqs',12);
$livreurC=new LivreurC();
$livreurC->afficherLivreur($livreur);
echo "****************";
echo "<br>";
echo "id:".$livreur->getidP();
echo "<br>";
echo "nom:".$livreur->getNom();
echo "<br>";
echo "prenom:".$livreur->getPrenom();
echo "<br>";
echo "tarif:".$livreur->getTarif();
echo "<br>";
echo "nbh:".$livreur->getNbh();
echo "<br>";


?>