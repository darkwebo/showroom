 <?PHP
include_once "../confige.php";
class livraisonC
  { 

      function ajouter_liv($liv){
    $sql="insert into livraison (numLivraison, nomClient,adresseClient,ville, numCommande) values (:numLivraison, :nomClient,:adresseClient,:ville,:numCommande)";
    $config=config::getConnexion();
    try{
        $req=$config->prepare($sql);
        $numLivraison=$liv->getnumLivraison();
        $nomClient=$liv->getnomClient();
        $adresseClient=$liv->getadresseClient();
        $ville=$liv->getville();
        $numCommande=$liv->getnumCommande();
    //Bind values is used to prepare thtatement
    //Always do this when there is an interaction from php to mySQL, specially the POST and PUT methods, to tell how they are linked from php to mysql
    //Binds a value to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.
    $req->bindValue(':numLivraison',$numLivraison);
    $req->bindValue(':nomClient',$nomClient);
    $req->bindValue(':adresseClient',$adresseClient);
    $req->bindValue(':ville',$ville);
    $req->bindValue(':numCommande',$numCommande);
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  
    function update_liv($liv){
    //$sql="UPDATE livraison SET numLivraison=:numLivraison, nomClient=:nomClient,adresseClient=:adresseClient, ville=:ville, numCommande=:numCommande WHERE numLivraison=:numLivraison";
    $sql="UPDATE `livraison` SET `numLivraison`=:numLivraison,`nomClient`=:nomClient,`adresseClient`=:adresseClient,`ville`=:ville,`numCommande`=:numCommande WHERE numLivraison=:numLivraison";
    
    $config=config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{  
        $req=$config->prepare($sql);
        $numLivraison=$liv->getnumLivraison();
        $nomClient=$liv->getnomClient();
        $adresseClient=$liv->getadresseClient();
        $ville=$liv->getville();
        $numCommande=$liv->getnumCommande();
    $datas = array( ':numLivraison'=>$numLivraison,':nomClient'=>$nomClient ,':adresseClient'=>$adresseClient,':ville'=>$ville,':numCommande'=>$numCommande);

    $req->bindValue(':numLivraison',$numLivraison);
    $req->bindValue(':nomClient',$nomClient);
    $req->bindValue(':adresseClient',$adresseClient);
    $req->bindValue(':ville',$ville);
    $req->bindValue(':numCommande',$numCommande);
    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }
      function supprimer_liv($numLivraison){
    $sql="DELETE FROM livraison where numLivraison= :numLivraison";
    $config =config::getConnexion();
        $req=$config->prepare($sql);
    $req->bindValue(':numLivraison',$numLivraison);
    try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
    function recupererall(){
        $id=$_SESSION['id'];
    $sql="SELECT * from livraison where nomClient=:id";
    $config= config::getConnexion();
    try{
   //$liste=$config->query($sql);
        $req=$config->prepare($sql);
    $req->bindValue(':id',$id);
    $req->execute();
    return $req;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      }


      function recuperer_fac($numLivraison){
    $sql="SELECT * from livraison where numLivraison=$numLivraison";
    $config= config::getConnexion();
    try{
    $liste=$config->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      }

    }

?>