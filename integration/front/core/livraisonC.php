<?PHP
include "../config.php";
class LivraisonC {
function afficherLivraison ($livraison){
		echo "idL: ".$livraison->getidL()."<br>";
		echo "adresse: ".$livraison->getAdresse()."<br>";
		echo "dat: ".$livraison->getdat()."<br>";
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterLivraison($livraison){
		$sql="insert into livraison (idL,adresse,dat) values (:idL,:adresse,:dat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idL=$livraison->getidL();
        $adresse=$livraison->getAdresse();
        $dat=$livraison->getDat();
		$req->bindValue(':idL',$idL);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':dat',$dat);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From livraison ORDER BY idL";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($idL){
		$sql="DELETE FROM livraison where idL= :idL";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idL',$idL);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$idL){
		$sql="UPDATE livraison SET idL=:idL, adresse=:adresse,dat=:dat WHERE idL=:idL";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idL=$livraison->getidL();
        $adresse=$livraison->getAdresse();
        $dat=$livraison->getDat();
$datas = array( ':idL'=>$idL, ':adresse'=>$adresse,':dat'=>$dat);
	
		$req->bindValue(':idL',$idL);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':dat',$dat);	
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivraison($idL){
		$sql="SELECT * from livraison where idL=$idL";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivraison($idC){
		$sql="SELECT * from livraison where idL=$idL";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>