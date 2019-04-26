<?PHP
include "../config.php";
class adminC {
function afficheradmin ($admin){
		echo "idA: ".$admin->getidA()."<br>";
		echo "nomA: ".$admin->getnomA()."<br>";
		echo "prenomA: ".$admin->getprenomA()."<br>";
		echo "telephoneA: ".$admin->gettelephoneA()."<br>";
        echo "mailProf: ".$admin->getmailProf()."<br>";
        echo "numFax: ".$admin->getnumFax()."<br>";
		echo "passwordA: ".$admin->getpasswordA()."<br>";
		
		//echo "imageC: ".$admin->getimageC()."<br>";
		
	}
	//function calculerSalaire($admin){
	//	echo $admin->getNbHeures() * $admin->getTarifHoraire();
	
	function ajouteradmin($admin){
		$sql="insert into admin (idA,nomA,prenomA,telephoneA,mailProf,numFax,passwordA) values (:idA,:nomA,:prenomA,:telephoneA,:mailProf,:numFax,:passwordA)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idA=$admin->getidA();
        $nomA=$admin->getnomA();
        $prenomA=$admin->getprenomA();
        $telephoneA=$admin->gettelephoneA();
        $mailProf=$admin->getmailProf();
        $numFax=$admin->getnumFax();
        $passwordA=$admin->getpasswordA();
		$req->bindValue(':idA',$idA);
		$req->bindValue(':nomA',$nomA);
		$req->bindValue(':prenomA',$prenomA);
		$req->bindValue(':telephoneA',$telephoneA);
        $req->bindValue(':mailProf',$mailProf);
        $req->bindValue(':numFax',$numFax);
		$req->bindValue(':passwordA',$passwordA);
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheradmins(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idA= a.idA";
		$sql="SElECT * From admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeradmin($idA){
		$sql="DELETE FROM admin where idA= :idA";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idA',$idA);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieradmin($admin,$idA){
		$sql="UPDATE admin SET idA=:idA, nomA=:nomA,prenomA=:prenomA,telephoneA=:telephoneA,mailProf=:mailProf,numFax=:numFax,passwordA=:passwordA  WHERE idA=:idA";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idA=$admin->getidA();
        $nomA=$admin->getnomA();
        $prenomA=$admin->getprenomA();
        $telephoneA=$admin->gettelephoneA();
        $mailProf=$admin->getmailProf();
        $numFax=$admin->getnumFax();
         $passwordA=$admin->getpasswordA();
       
       
$datas = array( ':idA'=>$idA, ':nomA'=>$nomA,':prenomA'=>$prenomA,':telephoneA'=>$telephoneA,':mailProf'=>$mailProf,':numFax'=>$numFax,':passwordA'=>$passwordA);
	
		$req->bindValue(':idA',$idA);
		$req->bindValue(':nomA',$nomA);
		$req->bindValue(':prenomA',$prenomA);
		$req->bindValue(':telephoneA',$telephoneA);
        $req->bindValue(':mailProf',$mailProf);
        $req->bindValue(':numFax',$numFax);
		$req->bindValue(':passwordA',$passwordA);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereradmin($idA){
		$sql="SELECT * from admin where idA=$idA";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeadmins($prenomA){
		$sql="SELECT * from admin where prenomA=$prenomA";
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