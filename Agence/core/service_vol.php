<?PHP
include "../core/config.php";
include "../entities/vol.php";
class service_vol {
function afficher ($vol){
        echo "ref: ".$vol->getRef()."<br>";
        echo "compagnie: ".$vol->getCompagnie()."<br>";
        echo "destination: ".$vol->getDestination()."<br>";
        echo "date: ".$vol->getDate()."<br>";
        echo "hdepart: ".$vol->getHdepart()."<br>";
        echo "harrivee: ".$vol->getHarrivee()."<br>";
      
    }
    
    function ajouter($vol){
        $sql="INSERT INTO vol (ref,compagnie,destination,datev,hdepart,harrivee) VALUES (:ref,:compagnie,:destination,:datev,:hdepart,:harrivee)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        
        $ref=$vol->getRef();
        $compagnie=$vol->getCompagnie();
        $destination=$vol->getDestination();
        $datev=$vol->getDate();
        $hdepart=$vol->getHdepart();
        $harrivee=$vol->getHarrivee();

 
        $req->bindValue(':ref',$ref);
        $req->bindValue(':compagnie',$compagnie);
        $req->bindValue(':destination',$destination);
        $req->bindValue(':datev',$datev);
        $req->bindValue(':hdepart',$hdepart);
        $req->bindValue(':harrivee',$harrivee);
       
               
        
            $req->execute();
           header('Location: afficher.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherVol(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From vol";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
   
   function modifier($vol,$ref){
        $sql="UPDATE vol SET  ref=:ref,compagnie=:compagnie,destination=:destination,datev=:datev,hdepart=:hdepart,harrivee=:harrivee WHERE ref=:ref";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $ref=$vol->getRef();
        $compagnie=$vol->getCompagnie();
        $destination=$vol->getDestination();
        $datev=$vol->getDate();
        $hdepart=$vol->getHdepart();
        $harrivee=$vol->getHarrivee();
        $datas = array(':ref'=>$ref,':compagnie'=>$compagnie,':destination'=>$destination,':datev'=>$datev,':hdepart'=>$hdepart,':harrivee'=>$harrivee);
        $req->bindValue(':ref',$ref);
        $req->bindValue(':compagnie',$compagnie);
        $req->bindValue(':destination',$destination);
        $req->bindValue(':datev',$datev);
        $req->bindValue(':hdepart',$hdepart);
        $req->bindValue(':harrivee',$harrivee);
        
        
            $s=$req->execute();
            

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recuperer($ref){
        $sql="SELECT * from vol where ref=$ref";
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