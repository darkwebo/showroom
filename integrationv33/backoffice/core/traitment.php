<?PHP
include_once '../confige.php';
class produitretC{
	function ajouter_produitret($produitret)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO prodreteur (id, designation, quantite, prix)
                              VALUES (:id, :designation, :quantite, :prix)");
    $sql->bindValue(':id', $produitret->getId());
    $sql->bindValue(':designation', $produitret->getdesignation());
    $sql->bindValue(':quantite', $produitret->getquantite());
    $sql->bindValue(':prix', $produitret->getprix());
     $sql->execute();
    $prod=$produitret->getquantite();
    $dd=$produitret->getId();
   $sql1=$config->prepare("UPDATE `produit` SET quantite=quantite-$prod where id=$dd");
       $sql1->bindValue(':id', $produitret->getId());
  

   
    $sql1->execute();
    echo "ajout avec succes <br/>";




    }
function modifier_produitret($produitret){
        $config=config::getConnexion();
      $sql =$config->prepare("update prodreteur set designation=:designation, quantite=:quantite, prix=:prix where id=:id");
 
    $sql->bindValue(':designation', $produitret->getdesignation());
    $sql->bindValue(':quantite', $produitret->getquantite());
    $sql->bindValue(':prix', $produitret->getprix());
       $sql->bindValue(':id', $produitret->getId());


    $sql->execute();
    echo "mofication avec succes <br/>";
   }
   function supprimer_produitret($produitret){
          $config=config::getConnexion();
      $sql =$config->prepare("delete from prodreteur  where id=:id");
          $sql->bindValue(':id', $produitret->getId());
             $sql->execute();
 }}
  function recupererEmploye($cin){
    $sql="SELECT * from prodreteur where cin=$cin";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
?>
