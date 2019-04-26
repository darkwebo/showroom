<?PHP
include_once '../confige.php';
class reclamationC{
	function ajouter_reclamation($reclamation)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO sav (id, nom, mail, sujet, message, id_vente, datee)
                              VALUES (:id, :nom, :mail, :sujet, :message, :id_vente,now())");
    $sql->bindValue(':id', $reclamation->getId());
    $sql->bindValue(':nom', $reclamation->getNom());
    $sql->bindValue(':mail', $reclamation->getMail());
    $sql->bindValue(':sujet', $reclamation->getSujet());
    $sql->bindValue(':message', $reclamation->getMessage());
       $sql->bindValue(':id_vente', $reclamation->getId_vente());

    $sql->execute();
    echo "ajout avec succes <br/>";




    }
function modifier_reclamation($reclamation)
{
        $config=config::getConnexion();
      $sql =$config->prepare("UPDATE sav set id=:id, nom=:nom, mail=:mail, sujet=:sujet, message=:message where num=:num");
    $sql->bindValue(':id', $reclamation->getId());
    $sql->bindValue(':nom', $reclamation->getNom());
    $sql->bindValue(':mail', $reclamation->getMail());
    $sql->bindValue(':sujet', $reclamation->getSujet());
    $sql->bindValue(':message', $reclamation->getMessage());
    $sql->bindValue(':num', $reclamation->getNum());
    $sql->execute();

    echo "modification avec succes <br/>";
   }
   function supprimer_reclamation($reclamation){
          $config=config::getConnexion();
      $sql =$config->prepare("delete from sav where num=:num");
          $sql->bindValue(':num', $reclamation->getNum());
             $sql->execute();
 }}
?>
