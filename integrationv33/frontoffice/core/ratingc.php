<?php
  include "../confige.php";
  class ratingc
 {
       function ajouterrating($x)
      {

        $sql="insert into produit2 (rating,comnt) VALUES (:rating,:comnt)";
        $db = config::getConnexion();
        try{
          $req=$db->prepare($sql);


        $req->bindValue(':rating',$x->get_rating());
        $req->bindValue(':comnt',$x->get_comnt());
        $req->execute();


        }
          catch (Exception $e){
            echo 'Erruer: ' .$e->getMessage();
          }     
    }
     


function afficheradmin(){
    $sql="SElECT comnt From produit2  ";
    $c = config::getConnexion();
    return ($c->query($sql));
    
  }

function etoile(){
  $config=config::getConnexion();
                            $sql =$config->prepare("SELECT COUNT(*) AS NEJMA from produit2 WHERE rating='star-2'") ;
                            $sql->execute();
                                while($result=$sql->fetch(PDO::FETCH_ASSOC))
        {
            return  $result['NEJMA'];
        }


 


}

     }




