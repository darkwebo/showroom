<?PHP
include "../config.php";
class AvisC {
function afficherAvis ($Avis){
		echo"Note: ".$Avis->getNote(). "<br>";
		echo "Avis: ".$Avis->getAvis()."<br>";
	}
	function ajouterAvis($Avis){
		$sql="insert into  avis(note,aviss) values (:note, :aviss)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $note=$Avis->getNote();
        $aviss=$Avis->getAvis();
		$req->bindValue(':note',$note);
		$req->bindValue(':aviss',$aviss);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAviss(){
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAvis($note){
		$sql="DELETE FROM avis where note= :note";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':note',$note);
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