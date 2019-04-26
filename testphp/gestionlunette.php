<?PHP
include_once 'configex1.php';


$config=config::getConnexion();
      $sql =$config->prepare("SELECT *FROM lunette");
	  $sql->execute();
?>
<html>

		<head>
    
		</head>

<body>
<table>
   <tr>
   	<th>referance</th>
   <th>marque</th>
   <th>type</th>
   <th>prix</th>
   <th>nb stock</th>
   <th>action</th>
   <th></th>
   </tr>
   <?php
   foreach($sql as $val)
   {
  echo "<form method='POST' action='modifer.php''><tr>
   <th><input type='text' name='ref' value=".$val['referance']."></th>
   <th><input type='text' name='mar' value=".$val['marque']."></th>
   <th><input type='text' name='type' value=".$val['type']."></th>
   <th><input type='text' name='prix' value=".$val['prix']."></th>
   <th><input type='text' name='nbstock' value=".$val['nombrestock']."></th> 
   <th> <button><i name='modifer'></i> modifer</button></th>
   <th><a href='commander.php'></a>commander</th>
   </tr></form>";
   }
 ?>
  </table>
</form>
</body>

</html>