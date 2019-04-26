<?PHP
include "../config2.php";
class options {

	function ajouteroption($option){
		$sql="insert into options (opt) values (:opt)";
		$db = config2::getConnexion();
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
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimeroption($opt){
		$sql="DELETE FROM options where opt= :opt";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':opt',$opt);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


}
?>
