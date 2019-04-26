<?PHP
include "../config.php";


class cars{

	function ajoutercar($car){
		$sql="insert into car (make,model,price,body_type,name,description,year,mileage,cv,fuel_type,transmission,photo,opt) values (:make,:model,:price,:body_type,:name,:description,:year,:mileage,:cv,:fuel_type,:transmission,:photo,:opt)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $make=$car->getmake();
        $model=$car->getmodel();
        $price=$car->getprice();
        $name=$car->getname();
		  $body_type=$car->getbody_type();
		 $cv=$car->getcv();
		  $opt=$car->getopt();
        $mileage=$car->getmileage();
        $year=$car->getyear();
        $description=$car->getdescription();
		 $transmission=$car->gettransmission();
        $photo=$car->getphoto();
        $fuel_type=$car->getfuel_type();
		$req->bindValue(':make',$make);
		$req->bindValue(':model',$model);
		$req->bindValue(':price',$price);
		$req->bindValue(':name',$name);
		$req->bindValue(':body_type',$body_type);
        $req->bindValue(':cv',$cv);
		$req->bindValue(':mileage',$mileage);
		$req->bindValue(':year',$year);
		$req->bindValue(':description',$description);
		$req->bindValue(':photo',$photo);
		$req->bindValue(':opt',$opt);
		$req->bindValue(':fuel_type',$fuel_type);
		$req->bindValue(':transmission',$transmission);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function affichercar(){

		$sql="SElECT * From car";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function affichercar2($name){
		$sql="SELECT * FROM car where name=:name";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':name',$name);
		try{
            $req->execute();
				return $req;
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recherchecar($min,$max,$rech){

		$sql="SElECT * From car WHERE $rech BETWEEN $min AND $max";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recherchecar2($rech2,$rech){

		$sql="SElECT * From car WHERE $rech2='$rech'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




	function supprimercar($id){
		$sql="DELETE FROM car where id=:id";
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
	function modifiercar($car,$id){
		$sql="UPDATE car SET name=:name,make=:make,model=:model,price=:price,body_type=:body_type,description=:description,year=:year,mileage=:mileage,cv=:cv,fuel_type=:fuel_type,transmission=:transmission,photo=:photo,opt=:opt   WHERE id=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

	    $make=$car->getmake();
        $model=$car->getmodel();
        $price=$car->getprice();
        $name=$car->getname();
		$body_type=$car->getbody_type();
		$cv=$car->getcv();
        $mileage=$car->getmileage();
        $year=$car->getyear();
        $description=$car->getdescription();
		$transmission=$car->gettransmission();
        $photo=$car->getphoto();
        $fuel_type=$car->getfuel_type();
				$opt=$car->getopt();

		$req->bindValue(':make',$make);
		$req->bindValue(':model',$model);
		$req->bindValue(':price',$price);
		//$req->bindValue(':name',$name);
		$req->bindValue(':body_type',$body_type);
        $req->bindValue(':cv',$cv);
		$req->bindValue(':mileage',$mileage);
		$req->bindValue(':year',$year);
		$req->bindValue(':description',$description);
		$req->bindValue(':photo',$photo);
		$req->bindValue(':fuel_type',$fuel_type);
		$req->bindValue(':transmission',$transmission);
		$req->bindValue(':name',$name);
		$req->bindValue(':opt',$opt);




            $s=$req->execute();
        }
        catch (Exception $e){
            echo " E9rreur ! ".$e->getMessage();
        }

	}



}

?>
