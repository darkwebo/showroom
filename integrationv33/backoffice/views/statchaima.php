
<?php 
include_once 'C:\xampp\htdocs\backoffice\core\config.php';

include "../core/produitC.php";
$ProduitC =new ProduitC();
$listeProduit=$ProduitC->afficherProduit();   
$config=config::getConnexion();
      $sql =$config->prepare("SELECT * FROM produit where categorie_id=16");
    $sql->execute();
 $grains=$sql->rowCount();

$sql2 =$config->prepare("SELECT * FROM produit where categorie_id=17");
    $sql2->execute();
 $materiel=$sql2->rowCount();
 $sql3 =$config->prepare("SELECT * FROM produit where categorie_id=18");
    $sql3->execute();
 $pesticide=$sql3->rowCount();
echo $grains,$pesticide,$materiel;

?> 

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
		  

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['grains', <?php echo $grains  ;  ?>],
          ['pesticiede', <?php echo $pesticide  ;  ?>],
          ['materiel',  <?php echo $materiel  ;  ?>],
          
        ]);

        var options = {
          title: 'Nombre des produit selon sa catégorie '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>