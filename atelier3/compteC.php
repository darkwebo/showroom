<?PHP
include "../atelier3/config.php";

class CompteC {
function afficherCompte ($compte){
		echo "id: ".$compte->getId()."<br>";
		echo "numCompte: ".$compte->getNumCompte()."<br>";
		echo "solde: ".$compte->getSolde()."<br>";
		echo "cin: ".$compte->getCin()."<br>";

	}

	function ajouterCompte($compte){
		$sql="insert into compte (id,numCompte,solde,cin) values (:id, :numCompte,:solde,:cin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $id=$compte->getId();
        $numCompte=$compte->getNumCompte();
        $solde=$compte->getSolde();
        $cin=$compte->getCin();

		$req->bindValue(':id',$id);
		$req->bindValue(':numCompte',$numCompte);
		$req->bindValue(':solde',$solde);
		$req->bindValue(':cin',$cin);


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherComptes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From compte inner join employe on compte.cin=employe.cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerCompte($id){
		$sql="DELETE FROM compte where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";

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

           // header('Location: index.php');
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
	}

	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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
