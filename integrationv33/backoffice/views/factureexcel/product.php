<?php
include_once '../../core/confige.php';
$config=config::getConnexion();
            $sql =$config->prepare("SELECT * FROM facture");
            $sql->execute();

            

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
					<th>numfacture</th>
					<th>nomClient</th>
					<th>adresseClient</th>
					<th>Montant</th>
					<th>numCommande</th>

					
				</tr>
			</thead>
			<tbody>
				<?php foreach($sql as $val)
            		{?>
					<tr>
						<td><?php echo $val['numfacture']; ?></td>
						<td><?php echo $val['nomClient']; ?></td>
						<td><?php echo $val['adresseClient']; ?></td>
						<td><?php echo $val['montant']; ?></td>
						<td><?php echo $val['numCommande']; ?></td>
				
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
