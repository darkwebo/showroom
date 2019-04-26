<?PHP
include_once "config.php";
class ProduitC {
	
	function ajouterProduit($produit){
		$sql="insert into produit (nom,image,prix,quantite, description, categorie_id, fournisseur_id) 
		values (:nom,:image,:prix,:quantite, :description, :categorie_id, :fournisseur_id)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $nom=$produit->getNom();
        $image=$produit->getImage();
        $prix=$produit->getPrix();
        $quantite=$produit->getQuantite();
        $description=$produit->getDescription();
		$categorie_id=$produit->getCategorie_id();
		$fournisseur_id=$produit->getFournisseur_id();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
		$req->bindValue(':categorie_id',$categorie_id);
		$req->bindValue(':fournisseur_id',$fournisseur_id);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduit(){
		$sql="select * From produit";
		$db = config::getConnexion();
		try{
			$sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($produit,$id){
		$sql="UPDATE produit SET nom = :nom, image = :image, prix = :prix , quantite = :quantite, description = :description, categorie_id = :categorie_id,
        		fournisseur_id = :fournisseur_id WHERE id=:id";
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
		
	    $nom=$produit->getNom();
        $image=$produit->getImage();
        $prix=$produit->getPrix();
        $quantite=$produit->getQuantite();
        $description=$produit->getDescription();
		$categorie_id=$produit->getCategorie_id();
		$fournisseur_id=$produit->getFournisseur_id();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
		$req->bindValue(':categorie_id',$categorie_id);
		$req->bindValue(':fournisseur_id',$fournisseur_id);
		$req->bindValue(':id',$id);
	
    	$s=$req->execute();
	
    }
    catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    }
		
	}
	function recupererProduit($id){
		$sql="SELECT * from produit where id= $id";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetch();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($nom){
		$sql="SELECT * from produit where nom=$nom";
		$db = config::getConnexion();
		try{
		 $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>