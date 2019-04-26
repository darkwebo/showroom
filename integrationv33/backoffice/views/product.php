<?php
require_once ('connection.php');

$qry = "SELECT  `nom`, `prix`, `quantite`, `description` FROM `produit`";
$res = mysqli_query($con,$qry);

?>
<html>

<head>
    <title>Table</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div class="container">
	<div class="row">
		<button id="export" class="btn btn-info">Export Excel</button>
	</div>
    <div class="row">
		<table id="product" class="table table-bordered">
			<thead>
				<tr>
					<th> Nom</th>					
					<th>prix</th>
					<th>quantite</th>
					<th>description</th>
					
					
					
				</tr>
			</thead>
			<tbody>

				<?php
				
				while($row = mysqli_fetch_assoc($res)){ ?>
					<tr>
						<td><?php echo $row['nom']; ?></td>
						<td><?php echo $row['prix']; ?></td>
						<td><?php echo $row['quantite']; ?></td>
						<td><?php echo $row['description']; ?></td>
						

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
    
</div>

<script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
<script src="table2excel/src/jquery.table2excel.js" type="text/javascript"></script>

<script>
    $("#export").click(function(){
        $("#product").table2excel({

            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
        filename: "product" //do not include extension
    });
    });

</script>

</body>
</html>
