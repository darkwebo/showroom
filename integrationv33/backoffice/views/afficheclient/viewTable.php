<?php 
include_once 'C:/xampp/htdocs/backoffice/core/confige.php';
  $config=config::getConnexion();
            $sql =$config->prepare("SELECT * FROM client") ;
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
                <th>nome</th>
                <th>id</th>
                <th>mail</th>
                <th>password</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($sql as $row) 
				{?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['active']; ?></td>
            </tr>
            <?php }  ?>
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