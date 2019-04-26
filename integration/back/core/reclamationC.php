<?PHP
include "../config.php";
class ReclamationC {
function afficherReclamation ($reclamation){
		echo"id reclamation: ".$reclamation->getId(). "<br>";
		echo "Type: ".$reclamation->getType()."<br>";
		echo "Etat: ".$reclamation->getEtat()."<br>";
		echo "Reclamation: ".$reclamation->getRec()."<br>";
	}
	function ajouterReclamation($reclamation){
		$sql="insert into  reclamation(id_reclamation,type,etat,REC) values (:id_reclamation, :type,:etat,:REC)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_reclamation=$reclamation->getId();
        $type=$reclamation->getType();
		$etat=$reclamation->getEtat();
		$REC=$reclamation->getRec();
		$req->bindValue(':id_reclamation',$id_reclamation);
		$req->bindValue(':type',$type);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':REC',$REC);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($id_reclamation){
		$sql="DELETE FROM reclamation where id_reclamation= :id_reclamation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_reclamation',$id_reclamation);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function modifierReclamation($reclamation,$id_reclamation){
		$sql="UPDATE reclamation SET etat='lu' WHERE id_reclamation=:id_reclamation";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}
?>