<?PHP
include "../config.php";
class LivreurC {
function afficherLivreur ($livreur){
		echo "idP: ".$livreur->getidP()."<br>";
		echo "nomP: ".$livreur->getNom()."<br>";
		echo "prenomP: ".$livreur->getPrenom()."<br>";
		echo "tarif: ".$livreur->getTarif()."<br>";
		echo "nbh: ".$livreur->getNbh()."<br>";
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterLivreur($livreur){
		$sql="insert into livreur (idP,nomP,prenomP,tarif,nbh) values (:idP,:nomP,:prenomP,:tarif,:nbh)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idP=$livreur->getidP();
        $nomP=$livreur->getNom();
        $prenomP=$livreur->getPrenom();
        $tarif=$livreur->getTarif();
        $nbh=$livreur->getNbh();
		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':prenomP',$prenomP);
		$req->bindValue(':tarif',$tarif);
		$req->bindValue(':nbh',$nbh);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From livreur ORDER BY idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($idP){
		$sql="DELETE FROM livreur where idP= :idP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$idP);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$idP){
		$sql="UPDATE livreur SET idP=:idP, nomP=:nomP,prenomP=:prenomP,tarif=:tarif,nbh=:nbh WHERE idP=:idP";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idP=$livreur->getidP();
        $nomP=$livreur->getNom();
        $prenomP=$livreur->getPrenom();
        $tarif=$livreur->getTarif();
        $nbh=$livreur->getNbh();
$datas = array( ':idP'=>$idP, ':nomP'=>$nomP,':prenomP'=>$prenomP,':tarif'=>$tarif,':nbh'=>$nbh);
	
		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':prenomP',$prenomP);
		$req->bindValue(':tarif',$tarif);
		$req->bindValue(':nbh',$nbh);		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivreur($idP){
		$sql="SELECT * from livreur where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivreur($idC){
		$sql="SELECT * from livreur where idP=$idP";
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