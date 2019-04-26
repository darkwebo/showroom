<?php
include "../config.php";

class CommandeC {
function afficherCommande ($commande){
		echo "Prenom: ".$commande->getPrenom()."<br>";
		echo "Nom: ".$commande->getNom()."<br>";
		echo "numero: ".$commande->getNumero()."<br>";
		echo "adresse: ".$commande->getAdresse()."<br>";
    	echo "Id produit: ".$commande->getIdProduit()."<br>";
      	echo "quantite: ".$commande->getQuantite()."<br>";
        	echo "prix unitaire: ".$commande->getPrixUnitaire()."<br>";
          	echo "details: ".$commande->getDetails()."<br>";
	}

	function calculerPrixTotal($commande){
		echo $commande->getPrixUnitaire() * $commande->getQuantite();
	}

	function ajouterCommande($commande){
		$sql="insert into commande (prenom,nom,numero,adresse,id_produit,quantite,prixUnitaire,details) values (:prenom,:nom,:numero,:adresse,:id_produit,:quantite,:prixUnitaire,:details)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $prenom=$commande->getPrenom();
        $nom=$commande->getNom();
        $numero=$commande->getNumero();
        $adresse=$commande->getAdresse();
        $id_produit=$commande->getIdProduit();
        $quantite=$commande->getQuantite();
        $prixUnitaire=$commande->getPrixUnitaire();
        $details=$commande->getDetails();
	  $req->bindValue(':prenom',$prenom);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':adresse',$adresse);
  	$req->bindValue(':id_produit',$id_produit);
  	$req->bindValue(':quantite',$quantite);
  	$req->bindValue(':prixUnitaire',$prixUnitaire);
    $req->bindValue(':details',$details);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherCommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerCommande($prenom){
		$sql="delete from commande where prenom= :prenom ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':prenom',$prenom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommande($commande,$id_produit){
		$sql="UPDATE commande set prenom=:prenom,nom=:nom,numero=:numero,adresse=:adresse,
    id_produit=:id_produit,quantite=:quantite,prixUnitaire=:prixUnitaire,details=:details WHERE id_produit=:id_produit";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $prenom=$commande->getPrenom();
            $nom=$commande->getNom();
            $numero=$commande->getNumero();
            $adresse=$commande->getAdresse();
            $id_produit=$commande->getIdProduit();
            $quantite=$commande->getQuantite();
            $prixUnitaire=$commande->getPrixUnitaire();
            $details=$commande->getDetails();


		$datas = array(':prenom'=>$prenom,':nom'=>$nom,':numero'=>$numero,':adresse'=>$adresse,':id_produit'=>$id_produit,
  ':quantite'=>$quantite,':prixUnitaire'=>$prixUnitaire,':details'=>$details);

    $req->bindValue(':prenom',$prenom);
  		$req->bindValue(':nom',$nom);
  		$req->bindValue(':numero',$numero);
  		$req->bindValue(':adresse',$adresse);
    	$req->bindValue(':id_produit',$id_produit);
    	$req->bindValue(':quantite',$quantite);
    	$req->bindValue(':prixUnitaire',$prixUnitaire);
      $req->bindValue(':details',$details);
			$req->bindValue(':id_produit',$id_produit);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererCommande($id_produit){
		$sql="SELECT * from commande where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeCommandes($id_produit){
		$sql="SELECT * from commande where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherCommandes($id_produit)
	{
		$sql = "SELECT * from commande where id_produit=$id_produit";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function trierCommandes()
	{
		$sql = "SELECT * from commande ORDER BY id_produit DESC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
}

?>
