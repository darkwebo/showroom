<?PHP
include_once '../confige.php';
class reclamationC{
  function ajouter_reclamation($reclamation)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO sav (id, nom, mail, sujet, message)
                              VALUES (:id, :nom, :mail, :sujet, :message)");
    $sql->bindValue(':id', $reclamation->getId());
    $sql->bindValue(':nom', $reclamation->getNom());
    $sql->bindValue(':mail', $reclamation->getMail());
    $sql->bindValue(':sujet', $reclamation->getSujet());
    $sql->bindValue(':message', $reclamation->getMessage());

    $sql->execute();
    echo "ajout avec succes <br/>";




    }
function modifier_reclamation($reclamation){
        $config=config::getConnexion();
      $sql =$config->prepare("update sav set id=:id, nom=:nom, mail=:mail, sujet=:sujet, message=:message, where num=:num");
    $sql->bindValue(':id', $reclamation->getId());
    $sql->bindValue(':nom', $reclamation->getNom());
    $sql->bindValue(':mail', $reclamation->getMail());
    $sql->bindValue(':sujet', $reclamation->getSujet());
    $sql->bindValue(':message', $reclamation->getMessage());
     $sql->bindValue(':num', $reclamation->getNum());

    $sql->execute();
    echo "mofication avec succes <br/>";
   }
   function supprimer_reclamation($reclamation){
          $config=config::getConnexion();
      $sql =$config->prepare("delete from sav where num=:num");
          $sql->bindValue(':num', $reclamation->getNum());
             $sql->execute();
 }
 function afficher_rec(){
  $config=config::getConnexion();
            $sql =$config->prepare("SELECT * FROM sav") ;
            $sql->execute();
        return $sql;
}
 function recupererEmploye($cin){
    $sql="SELECT * from sav where cin=$cin";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
}
?>
