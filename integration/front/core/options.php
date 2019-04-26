<?PHP
include "../config.php";


class options {

	function ajouteroption($option){
		$sql="insert into options (opt) values (:opt)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $opt=$option->getopt();


		$req->bindValue(':opt',$opt);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficheroption(){

		$sql="SElECT * From options";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimercar($make){
		$sql="DELETE FROM car where name= :name";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':name',$name);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCar($car,$make){
		$sql="UPDATE car SET namee=:namee, model=:model,price=:price,body_type=:body_type WHERE name=:name";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		$namee=$car->getname();
        $model=$car->getmodel();
        $price=$car->getprice();
        $body_type=$car->getbody_type();
        $make=$car->getmake();
		$datas = array(':namee'=>$namee, ':make'=>$make, ':model'=>$model,':price'=>$price,':body_type'=>$nb,':name'=>$name);
		$req->bindValue(':name',$name);
		$req->bindValue(':make',$make);
		$req->bindValue(':model',$model);
		$req->bindValue(':price',$price);
		$req->bindValue(':body_type',$body_type);
		$req->bindValue(':name',$name);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recuperercar($name){
		$sql="SELECT * from car where name=$name";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherlistecars($name){
		$sql="SELECT * from car where name=$name";
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
