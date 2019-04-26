<?php
include "../config.php";

class FactureC {
function afficherFacture ($facture){
		echo "Prenom: ".$facture->getPrenom()."<br>";
		echo "Nom: ".$facture->getNom()."<br>";
		echo "cin: ".$facture->getCin()."<br>";
    	echo "Id produit: ".$facture->getIdProduit()."<br>";
      	echo "Nom produit: ".$facture->getNomProduit()."<br>";
      	echo "quantite: ".$facture->getQuantite()."<br>";
        	echo "prix: ".$facture->getPrix()."<br>";
          	echo "date: ".$facture->getDate()."<br>";
	}



	function ajouterFacture($facture){
		$sql="insert into facture (prenom,nom,cin,id_produit,nom_produit,quantite,prix,date) values (:prenom,:nom,:cin,:id_produit,:nom_produit,:quantite,:prix,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $prenom=$facture->getPrenom();
        $nom=$facture->getNom();
        $cin=$facture->getCin();
        $id_produit=$facture->getIdProduit();
        $nom_produit=$facture->getNomProduit();
        $quantite=$facture->getQuantite();
        $prix=$facture->getPrix();
        $date=$facture->getDate();
	  $req->bindValue(':prenom',$prenom);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':cin',$cin);
  	$req->bindValue(':id_produit',$id_produit);
    $req->bindValue(':nom_produit',$nom_produit);
  	$req->bindValue(':quantite',$quantite);
  	$req->bindValue(':prix',$prix);
    $req->bindValue(':date',$date);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherFactures(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From facture";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerFacture($prenom){
		$sql="delete from facture where prenom= :prenom ";
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
	function modifierFacture($facture,$id_produit){
		$sql="UPDATE facture set prenom=:prenom,nom=:nom,cin=:cin,
    id_produit=:id_produit,nom_produit=:nom_produit,quantite=:quantite,prix=:prix,date=:date WHERE id_produit=:id_produit";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $prenom=$facture->getPrenom();
            $nom=$facture->getNom();
            $cin=$facture->getCin();
            $id_produit=$facture->getIdProduit();
              $nom_produit=$facture->getNomProduit();
            $quantite=$facture->getQuantite();
            $prix=$facture->getPrix();
            $date=$facture->getDate();


		$datas = array(':prenom'=>$prenom,':nom'=>$nom,':cin'=>$cin,':id_produit'=>$id_produit,':nom_produit'=>$nom_produit,
  ':quantite'=>$quantite,':prix'=>$prix,':date'=>$date);

    $req->bindValue(':prenom',$prenom);
  		$req->bindValue(':nom',$nom);
  		$req->bindValue(':cin',$cin);
    	$req->bindValue(':id_produit',$id_produit);
      	$req->bindValue(':nom_produit',$nom_produit);
    	$req->bindValue(':quantite',$quantite);
    	$req->bindValue(':prix',$prix);
      $req->bindValue(':date',$date);
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
	function recupererFacture($id_produit){
		$sql="SELECT * from facture where id_produit=$id_produit";
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
		$sql="SELECT * from facture where id_produit=$id_produit";
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
