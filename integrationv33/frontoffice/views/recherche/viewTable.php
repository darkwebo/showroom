<?php 
include_once 'confige.php';
 $id=$_POST['cher'];
  $config=config::getConnexion();
            $sql =$config->prepare("SELECT * FROM sav where id=$id") ;
            $sql->execute();
       

 /*foreach ($elements as $row)
 {
 	$data=$row['numfacture']. ';' . $row['nomClient']. ';' . $row['adresseClient'] . ';' . $row['montant'] . ';' . $row['numCommande'] . "\r\n";
 	 $ecrire=fopen('facture.txt',"a+");
 	 fputs($ecrire,$data);
 	 fputs($ecrire,"\n");
 }*/
 /*
include "traitment.php";
$factureE = new reclamationC();*/
/*$list=$factureE->afficher_rec();
$list2=array();
$list2=$list;*/
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script> 
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>num</th>
                <th>nom</th>
                <th>id</th>
                <th>mail</th>
                <th>sujet</th>
                <th>message</th>
                <th>id vente</th>
                <th>action</th>
                  <th>action</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($sql as $row) 
				{?>
            <tr>
                <td><?php echo $row['num']; ?></td>
                  <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td><?php echo $row['sujet']; ?></td>
                <td><?php echo $row['message']; ?></td>
                  <td><?php echo $row['id_vente']; ?></td>
              <td>
                <form method="GET"  action="../savmodi.php?num=<?php echo $row['num']; ?>" class="form-horizontal bucket-form" >
                 <input type='hidden' value="<?php echo $row['num'] ?>" name='num' > 
                <button type="submit" class="btn btn-success">modifier</button>
                </form>          
            </td>
                   <td>
                <form method="GET"  action="../savsupp.php?num=<?php echo $row['num']; ?>" class="form-horizontal bucket-form" >
                 <input type='hidden' value="<?php echo $row['num'] ?>" name='num' > 
                <button type="submit" class="btn btn-warning">supprimer</button>
                </form>          
            </td>
            </tr>
            <?php 
            	$data=$row['num']. ';' . $row['nom'] . $row['id']. ';' . $row['mail'] . ';' . $row['sujet'] . ';' . $row['message'] ;
 	 	$ecrire=fopen('facture.txt',"a+");
 	 	fputs($ecrire,$data);
 	 	fputs($ecrire,"\n");
        			} ?>
        </tbody>
       
    </table>
    <form action="/Project/web/pdf.php" method="post">
    <input type="submit" 
         name="Submit" id="frm1_submit" />
</form>
 <?php 
 if (isset($_POST['sumbit'])) 
 {
 	header('Location: http://localhost/Project/web/pdf.php');
 }
?>
	</body>