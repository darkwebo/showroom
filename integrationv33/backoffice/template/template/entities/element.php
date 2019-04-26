<?php 
include_once  '../Config.php';

class User{
	private $login;
    private $pwd;
	private $mail;

	function getLog(){ return $this->login;}
    function getPWD(){ return $this->pwd;}
	function getMail(){ return $this->mail;}
    public function __construct($login,$pwd)
	{
		$this->login=$login;
		$this->pwd=$pwd;		
	}
	public function Logedin($login,$pwd)
	{
		$db=config::getConnexion();
		$req="select * from client where id_Client='$login' && password='$pwd'";
		$rep=$db->query($req);
		return $rep->fetchAll();
	}
}

class Commande{
	private $id;
	private $article;
	private $prixUnitaire;
	private $Quantite;
	private $Total;
	private $id_C;

    public function getId(){return $this->id;}
	public function getarticle(){return $this->article;}
	public function getprixUnitaire(){return $this->prixUnitaire;}
	public function getQuantite(){return $this->Quantite;}
	public function getTotal(){return $this->Total;}
	public function getid_C(){return $this->id_C;}

	public function setId($article){$this->id = $id;}
	public function setarticle($article){$this->article = $article;}
	public function setprixUnitaire($prixUnitaire){$this->prixUnitaire = $prixUnitaire;}
	public function setQuantite($Quantite){$this->Quantite = $Quantite;}
	public function setTotal($Total){$this->Total = $Total;}
	public function setid_C($Total){$this->id_C = $id_C;}
    
	public function __construct($id, $article, $prixUnitaire, $Quantite, $Total, $id_C){
        $this->id = $id;
        $this->article = $article;
        $this->prixUnitaire = $prixUnitaire;
        $this->Quantite = $Quantite;
        $this->Total = $Total;
        $this->id_C = $id_C;
    }
    public function afficherCommande(){
    	echo "Le Produit est <br/> <br/>";
    	echo "ID: ".$this->id."<br/>";
	    echo "Article: ".$this->article."<br/>";
	    echo "PrixUnitaire: ".$this->prixUnitaire."<br/>";
	    echo "Quantite: ".$this->Quantite."<br/>";
    }
    public function calculerCommande(){
	    return "Et le prix totale est: ".($this->prixUnitaire*$this->Quantite)." DT <br/> <br/>";
    }
}
class Liste{

	public function creer_id_commande($concat)
	{
	    $db=config::getConnexion();
		$sql=$db->prepare("SELECT COUNT(*)  AS total FROM  Commande");
		$sql->execute();
		
		foreach ($sql as $data)
		{
			 
		}
		return $concat.$data['total'];
	}
	public function ajouter_Liste_Commandes($id_com,$id_client,$total)
	{
	    
	    $db=config::getConnexion();
		$sql=$db->prepare('INSERT INTO  liste_commandes VALUES(:id_com,:id_client,now(),:total)');
		$sql->bindValue(":id_com",$id_com);
		$sql->bindValue(":id_client",$id_client);
		$sql->bindValue(":total",$total);
		$sql->execute();
		
	}
	public function supprimer_Liste_Commandes($id_com)
	{
		$db = Config::getConnexion();
		$req = "DELETE FROM liste_commandes WHERE id = '".$id_com."';";
		$db->query($req);
	}
}
class Confirmer{
	
	public function ajouterCommande($Commande)
	{
		/*$db = Config::getConnexion();
		$req = "INSERT INTO `commande`(`id`,`article`, `date`, `prixUnitaire`, `quantite`,`total`) VALUES ('".$Commande->getId()."','".$Commande->getarticle()."',now(),'".$Commande->getprixUnitaire()."','".$Commande->getQuantite()."','".$Commande->getTotal()."');";
		$db->query($req);*/
		//header("Location: ../panier.php");
		//exit;

		$db = Config::getConnexion();
		$sql = $db->prepare('INSERT INTO Commande (id, article, `date`, prixUnitaire, quantite, total, id_C) VALUES (:id, :article, now(), :prixUnitaire, :Quantite, :prixTotal, :id_C);');

		$sql->bindValue(':id', $Commande->getId());
		$sql->bindValue(':article', $Commande->getarticle());
		$sql->bindValue(':prixUnitaire', $Commande->getprixUnitaire());
		$sql->bindValue(':Quantite', $Commande->getQuantite());
		$sql->bindValue(':prixTotal', $Commande->getTotal());
		$sql->bindValue(':id_C', $Commande->getid_C());
		$sql->execute();
	}
	public function envoyermail($clt)
	{
        $destinataire = $clt->getmail();
	}
    public function modifierCommande($Commande)
	{
		/*$db = Config::getConnexion();
		$req = "UPDATE commande SET quantite = '".$Commande->getQuantite()."', total = '".$Commande->getTotal()."' WHERE id = '".$Commande->getId()."';'";
   		$db->query($req); 
		header("Location: basic_table.php");
		exit;
        */
        $db = Config::getConnexion();
		$req = 'UPDATE Commande SET quantite = :Quantite, total = :prixTotal WHERE id_ligne = :id;';
		$sql = $db->prepare($req);
		$sql->bindValue(':id', $Commande->getId());
		$sql->bindValue(':Quantite', $Commande->getQuantite());
		$sql->bindValue(':prixTotal', $Commande->getTotal());
		$sql->execute();
		header("Location: ../admin/basic_table.php");
		exit;
	}
	public function supprimerCommande($Commande)
	{
		$db = Config::getConnexion();
		$req = "DELETE FROM commande WHERE id_ligne = '".$Commande->getid()."';";
		
		$db->query($req);
		header("Location: basic_table.php");
		exit;
	}
}

class panier
{
	
	public function __construct()
	{
		if(!isset($_SESSION))
		{
			session_start();
		}

		if(!isset($_SESSION['panier']))
		{
			$_SESSION['panier']= array();
		}
	}

}
class panierC
{
	/*public function add($product)
	{
		$_SESSION['panier'][$product]=1;
		header("Location: panier.php");
        exit;
	}*/

	public function del($product)
	{
		unset($_SESSION['panier'][$product]);
		header("Location: ../view/panier.php");
        exit;
	}
	public function add($product)
	{
		if(!isset($_SESSION['panier'][$product])){
		    $_SESSION['panier'][$product]++;
		}
		else{
		    $_SESSION['panier'][$product]=1;
		}	
		header("Location: ../view/panier.php");
		exit;	
	}
	
	
	public function supprimer_panier($produit_id)
	{
		unset($_SESSION['panier'][$produit_id]);
		
		
	}
	public function supprimer_definitivement_panier()
	{
		unset($_SESSION['panier']);
			
	}
	public function calculer_t()
	{
		$db = Config::getConnexion();
		$total=0;
		$ids= array_keys($_SESSION['panier']);
		if(empty ($ids)){
			$products=array();
		}
		else{
		    $products=$db->prepare('SELECT prix FROM produit WHERE id in ('.implode(',',$ids).')');
		    $products->execute();
	    }
		foreach ($products as $data){
			$total +=$data['prix'];
		}
		return $total;
    }
}
?>