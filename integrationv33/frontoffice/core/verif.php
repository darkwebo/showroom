<?php
include_once "../entites/element.php";
require '../views/PHPMailer-master/PHPMailerAutoload.php';
$db = Config::getConnexion();

$header="MIME-Version: 1.0\r\n";
$header.='From:"Gabriel Tiodoung"<support gabrieltiodoung61@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'qtcreator6@gmail.com';          // SMTP username
$mail->Password = '123456789az'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to



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
$products=$db->prepare('SELECT * FROM client where id = ?');
$products->bindParam(1,$id_client);
$products->execute();
foreach ($products as $add):
    if($add['password']==$pas){
        $List->ajouter_Liste_Commandes($id_commande,$add['id'],$_POST['total']);
        for($i=1;$i<=$_POST['var1'];$i++){
            $qute=(int)($_POST['q'.$i]);
            $total=(int)($_POST['t'.$i]);
            $prix=(int)( $_POST['p'.$i]);
            $id = $_POST['idtt'.$i];
            $nom= $_POST['nom'.$i];

            if (isset($_POST['reserver'])) {
                $Comm = new Commande($id,$nom,$prix,$qute,$total,$id_commande);
                $Pan = new Confirmer();
                $Pan->ajouterReservation($Comm); 
                $content = '<link rel="stylesheet" type="text/css" href="css/panier.css">';
                $content  .= '
                    <body  bgcolor="#2fdab8">
                        <div align = "left">
                                <h4 align = "left"><img align = "left"  src="../images/1.png"  width = "100px" height = "100px"/><span class= "hhh2">S</span>ociete de <br/><br/><span class= "hhh2">D</span>eveloppement<br/><br/> <span class= "hhh2">A</span>gricole</h4>
                        </div>
                        <div><h3 align = "right" >ID_Commande:';
                        $content .= " $id_commande </h3>";
                        $content .= '<h2 align="center">Detail Sur la Commande</h2>';
                        
                        
                        $db = Config::getConnexion();
                        $sql = "SELECT * FROM commande  WHERE  id_C = '$id_commande'";
                        $query = $db->prepare($sql);
                        $query->execute();
                        $sdt = $query->fetchAll(PDO::FETCH_OBJ);

                $content .= '
                        <table cellspacing="2" align="center" height= "50%" width="100%"  cellpadding="10">  
                        <thead>
                          <tr class="pure" >
                            <th>Article</th>
                            <th>Date</th>
                            <th>Prix Unitaire</th>
                            <th>Quantite</th>
                            <th>Total</th>
                          </tr>
                        </thead>';
                foreach($sdt as $row){
                $content .= '
                        <tbody align = "center">';
                $content .= "
                            <tr>
                                <td>$row->article</td>
                                <td>$row->date</td>
                                <td>$row->prixUnitaire</td>
                                <td>$row->quantite</td>
                                <td>$row->total</td>
                            </tr>";
                } 
                $content .= '        
                            <tr class="pure">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div align="left">
                                        <span class="dddj">Total <span class= "hhh">du</span></span>
                                    </div>
                                    <div align="right">
                                        <span class="dj"><span class= "hhh">PA</span>nier</span>
                                    </div>
                                </td>
                                <td  colspan="2">
                                    <div align="center"></div>
                                    <div align="center"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div align="center"></div>
                                </td>
                                <td>
                                    <div color="red" align="center"></div>
                                    <div align="center" class="puttttttt">
                                        <span class="ddj"><span class= "hhh1">TOTAL</span></span>
                                        <hr/>';
                $sql = "SELECT * FROM liste_commandes  WHERE  id_commande = '$id_commande'";
                $query = $db->prepare($sql);
                $query->execute();
                $sdt = $query->fetchAll(PDO::FETCH_OBJ);
                foreach($sdt as $row){
                $content .= "
                                        <h4 >$row->total DT</h4>";}
                $content .= '
                                        <hr/>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </body>';
               // mail($add['mail'], "Recapitulatif de votre Reservation",$content,$header); 

                $mail->setFrom('qtcreator6@gmail.com', $header);
                 $mail->addAddress($add['mail']);  
  
                $mail->isHTML(true);  

                $bodyContent = $content;

                $mail->Subject = "Recapitulatif de votre Reservation";
                $mail->Body    = $bodyContent;

                //$mail->addAttachment("C:/xampp/htdocs/backoffice/views/imagemail/".$_POST['file'], 'new.png ,new.jpg ,new.pdf');

                if(!$mail->send()) 
                {
                    echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('votre mail a ete envoyer ');
                        window.location.replace('../view/mail_compose.php');
                        </SCRIPT>";
                        header("Location: ../views/mail_compose.php");
                }
                else 
                {
                    echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('echec d'envoi de Email);
                        window.location.replace('../view/mail_compose.php');
                        </SCRIPT>";
                        header("Location: ../views/mail_compose.php");
                }
            }
            else{
                $Comm = new Commande($id,$nom,$prix,$qute,$total,$id_commande);
                $Pan = new Confirmer();
                $Pan->ajouterCommande($Comm); 
                $content = '<link rel="stylesheet" type="text/css" href="css/panier.css">';
                $content  .= '
                    <body class = "bgcolo">
                        <div align = "left">
                                <h4 align = "left"><img align = "left"  src="../images/1.png"  width = "100px" height = "100px"/><span class= "hhh2">S</span>ociete de <br/><br/><span class= "hhh2">D</span>eveloppement<br/><br/> <span class= "hhh2">A</span>gricole</h4>
                        </div>
                        <div><h3 align = "right" >ID_Commande:';
                        $content .= " $id_commande </h3>";
                        $content .= '<h2 align="center">Detail Sur la Commande</h2>';
                        
                        
                        $db = Config::getConnexion();
                        $sql = "SELECT * FROM commande  WHERE  id_C = '$id_commande'";
                        $query = $db->prepare($sql);
                        $query->execute();
                        $sdt = $query->fetchAll(PDO::FETCH_OBJ);

                $content .= '
                        <table cellspacing="2" align="center" height= "50%" width="100%"  cellpadding="10">  
                        <thead>
                          <tr class="pure" >
                            <th>Article</th>
                            <th>Date</th>
                            <th>Prix Unitaire</th>
                            <th>Quantite</th>
                            <th>Total</th>
                          </tr>
                        </thead>';
                foreach($sdt as $row){
                $content .= '
                        <tbody align = "center" bgcolor="#2fdab8">';
                $content .= "
                            <tr>
                                <td>$row->article</td>
                                <td>$row->date</td>
                                <td>$row->prixUnitaire</td>
                                <td>$row->quantite</td>
                                <td>$row->total</td>
                            </tr>";
                } 
                $content .= '        
                            <tr class="pure">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div align="left">
                                        <span class="dddj">Total <span class= "hhh">du</span></span>
                                    </div>
                                    <div align="right">
                                        <span class="dj"><span class= "hhh">PA</span>nier</span>
                                    </div>
                                </td>
                                <td  colspan="2">
                                    <div align="center"></div>
                                    <div align="center"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div align="center"></div>
                                </td>
                                <td>
                                    <div color="red" align="center"></div>
                                    <div align="center" class="puttttttt">
                                        <span class="ddj"><span class= "hhh1">TOTAL</span></span>
                                        <hr/>';
                $sql = "SELECT * FROM liste_commandes  WHERE  id_commande = '$id_commande'";
                $query = $db->prepare($sql);
                $query->execute();
                $sdt = $query->fetchAll(PDO::FETCH_OBJ);
                foreach($sdt as $row){
                $content .= "
                                        <h4 >$row->total DT</h4>";}
                $content .= '
                                        <hr/>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </body>';
                //mail($add['mail'], "Recapitulatif de votre Commande",$content,$header); 
                 $mail->setFrom('qtcreator6@gmail.com', $header);
                 $mail->addAddress($add['mail']);  
  
                $mail->isHTML(true);  

                $bodyContent = $content;

                $mail->Subject = "Recapitulatif de votre Commande";
                $mail->Body    = $bodyContent;

                //$mail->addAttachment("C:/xampp/htdocs/backoffice/views/imagemail/".$_POST['file'], 'new.png ,new.jpg ,new.pdf');

                if(!$mail->send()) 
                {
                    echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('votre mail a ete envoyer ');
                        window.location.replace('../view/mail_compose.php');
                        </SCRIPT>";
                        header("Location: ../views/mail_compose.php");
                }
                else 
                {
                    echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('echec d'envoi de Email);
                        window.location.replace('../view/mail_compose.php');
                        </SCRIPT>";
                        header("Location: ../views/mail_compose.php");
                }
            }
        }

        $Pa->supprimer_definitivement_panier();
        header("location: ../views/paiment.php");
    }
    else{
        echo "Veillez vous connecter ....!S.V.P!....";
        header("location: ../views/valider_commande.php");    
    }
endforeach;
?>