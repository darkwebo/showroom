<?PHP
include "../config.php";

class CompetitionC {
function afficherCompetition ($competition){
		echo "nom: ".$competition->getNom()."<br>";
		echo "nom_c_s: ".$competition->getNomCS()."<br>";
		echo "heure: ".$competition->getHeure()."<br>";
		echo "date : ".$competition->getDate()."<br>";
		echo "cout: ".$competition->getCout()."<br>";
    echo "type: ".$competition->getType()."<br>";
	}



	function ajouterCompetition($competition){
		$sql="insert into competitions (nom,nom_c_s,heure,date,cout,type) values (:nom,:nom_c_s,:heure,:date,:cout,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $nom=$competition->getNom();
        $nom_c_s=$competition->getNomCS();
        $heure=$competition->getHeure();
        $date=$competition->getDate();
        $cout=$competition->getCout();
        $type=$competition->getType();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':nom_c_s',$nom_c_s);
		$req->bindValue(':heure',$heure);
		$req->bindValue(':date',$date);
		$req->bindValue(':cout',$cout);
    $req->bindValue(':type',$type);


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherCompetitions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From competitions";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCompetition($competition,$nom){
		$sql="UPDATE competitions SET nom=:nom, nom_c_s=:nom_c_s,heure=:heure,date=:date,cout=:cout,type=:type WHERE nom=:nom";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		$nom=$competition->getNom();
        $nom_c_s=$competition->getNomCS();
        $heure=$competition->getHeure();
        $date=$competition->getDate();
        $cout=$competition->getCout();
        $type=$competition->getType();

		$datas = array(':nom'=>$nom, ':nom_c_s'=>$nom_c_s, ':heure'=>$heure,':date'=>$date,':cout'=>$cout,':type'=>$type);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nom_c_s',$nom_c_s);
		$req->bindValue(':heure',$heure);
		$req->bindValue(':date',$date);
		$req->bindValue(':cout',$cout);
		$req->bindValue(':type',$type);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererCompetition($nom){
		$sql="SELECT * from competitions where nom=$nom";
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
