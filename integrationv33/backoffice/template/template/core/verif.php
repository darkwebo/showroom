<?php
include_once "../entities/element.php";
$db = Config::getConnexion();

$header="MIME-Version: 1.0\r\n";
$header.='From:"Gabriel Tiodoung"<support gabrieltiodoung61@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$List = new Liste();
$pa = new panier();
$Pa = new panierC();

for($i=1;$i<=$_POST['var1'];$i++){

}
for($i=1;$i<=$_POST['var1'];$i++){
	$noms[]= $_POST['nom'.$i]	;
}
for($i=0;$i<$_POST['var1'];$i++){
	$noms[$i];
}
$concat="";
for($i=0;$i<$_POST['var1'];$i++){
	$concat=$concat.(substr($noms[$i],0,2));
}
$id_commande=$List->creer_id_commande($concat);
$id_client=$_POST['login'];
$pas=$_POST['pwd'];

//$List->ajouter_Liste_Commandes($id_commande,$id_client,$_POST['total']);
$products=$db->prepare('SELECT * FROM client where id_Client = ?');
$products->bindParam(1,$id_client);
$products->execute();
foreach ($products as $add):
    if($add['password']==$pas){
        $List->ajouter_Liste_Commandes($id_commande,$add['id_Client'],$_POST['total']);
        for($i=1;$i<=$_POST['var1'];$i++){
            $qute=(int)($_POST['q'.$i]);
            $total=(int)($_POST['t'.$i]);
            $prix=(int)( $_POST['p'.$i]);
            $id = $_POST['idtt'.$i];
            $nom= $_POST['nom'.$i];

            $Comm = new Commande($id,$nom,$prix,$qute,$total,$id_commande);
            $Pan = new Confirmer();
            $Pan->ajouterCommande($Comm); 
        }
        ?><link rel="stylesheet" type="text/css" href="../css/panier.css"><?php
    $content .= "
    <body>
        ";
        
        $db = Config::getConnexion();
        $sql = "SELECT * FROM commande WHERE id_C = '$id_commande'";
        $query = $db->prepare($sql);
        $query->execute();
        $sdt = $query->fetchAll(PDO::FETCH_OBJ);

    $content .= "
<div class ='commande'>
    <table cellspacing='2' align='center' height= '60%' width='80%'  cellpadding='10'> 
        <thead>
        <tr><h2 align='left'>S.D.A</h2></tr>
        <tr><h4 align='center'>Detail Sur la Commande</h4></tr>
        <tr> <h3 align='left'>ID_Commande: $id_commande</h3> </tr>
          <tr class = 'pure'>
            <td><div align='center'><span class='ddj'>Article</span></div></td>
            <td><div align='center'><span class='ddj'>Prix</span></div> <div align='center'><span class='ddj'>Unitaire</span></div></td>
            <td><div align='center'><span class='ddj'>Quantite</span></div></td>
            <td><div align='center'><span class='ddj'>Totaux</span></div></td>
        </tr>
        </thead>";
    foreach($sdt as $row){
    $dx=$row->id_C;
    $content .= "
        </tbody>
            <tr>
                <td>$row->article</td>
                <td>$row->prixUnitaire</td>
                <td>$row->quantite</td>
                <td>$row->total</td>
            </tr>"
            ;
    }
    $content .= "
            <tr class='pure'>
                <td></td>
                <td></td>
                <td>
                    <div align='left'>
                        <span class='dddj'>Total <span class= 'hhh'>du</span</span>
                    </div>
                    <div align='right'>
                        <span class='dj'><span class= 'hhh'>PA</span>nier</span>
                    </div>
                </td>
                <td>
                    <div align='center'></div>
                    <div align='center'></div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <div align='center'></div>
                </td>
                <td>
                    <div color='red' align='center'></div>
                    <div align='center' class='puttttttt'>
                        <span class='ddj'><span class= 'hhh1'>TOTAL</span></span>
                        <hr/>";
    foreach($sdt as $row){
    $dx=$row->id_C;
    $content .= "

                        <h4 class= 'not'><input class= 'not' type='text'  value='$row->total' name='total'  size='7px' id='total'>DT</h4>
                        <hr/>
                    </div>
                </td>
            </tr>
        </tbody>
    ";} 
         
    $content .= "
    </table>
</div>
</body>";
        mail("gabrieljordan.tiodoungymfeue@esprit.tn", "Recapitulatif de votre Commande",$content,$header); 

        $Pa->supprimer_definitivement_panier();
        header("location: ../view/paiment.php");
    }
    else{
        echo "Veillez vous connecter ....!S.V.P!....";
        header("location: ../view/valider_commande.php");    
    }
endforeach;
?>