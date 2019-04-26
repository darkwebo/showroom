<?PHP
include_once "config.php";
class FournisseurC {
	
	function ajouterFournisseur($fournisseur){
		$sql="insert into fournisseur (email,nom,tel,adresse) 
		values (:email,:nom,:tel, :adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $email=$fournisseur->getEmail();
        $nom=$fournisseur->getNom();
        $tel=$fournisseur->getTel();
        $adresse=$fournisseur->getAdresse();
      
		
		$req->bindValue(':email',$email);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':adresse',$adresse);
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherFournisseur(){
		$sql="select * From fournisseur";
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
	function supprimerFournisseur($id){
		$sql="DELETE FROM fournisseur where id= :id";
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
	function modifierFournisseur($fournisseur,$id){
		$sql="UPDATE fournisseur SET email = :email, nom = :nom,tel = :tel,adresse = :adresse where id = :id";
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
		
	    $email=$fournisseur->getEmail();
        $nom=$fournisseur->getNom();
        $tel=$fournisseur->getTel();
        $adresse=$fournisseur->getAdresse();
        
		$req->bindValue(':email',$email);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':id',$id);
	
    	$s=$req->execute();
	
    }
    catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    }
		
	}
	function recupererFournisseur($id){
		$sql="SELECT * from fournisseur where id= $id";
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
	
}

?>