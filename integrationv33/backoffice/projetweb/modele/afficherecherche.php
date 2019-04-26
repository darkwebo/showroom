<?php 
include_once 'Produitpromo.php';

if (isset($_POST['search']) && !empty($_POST['search'])) {

	$search = $_POST['search'];
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $sql = "SELECT * FROM produitpromo  where nom  LIKE '%$search%'";
    $products=$db->query($sql);
    while($donnee=$products->fetch())
    {
      ?>
    <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><?php echo $donnee['id'];?></td>
            <td><span class="text-ellipsis"><?php echo $donnee['nom'];?></span></td>
            <td><span class="text-ellipsis"><?php echo $donnee['date_debut_promo'];?></span></td>
            <td><?php echo $donnee['date_fin_promo'];?></td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <?php
      }
        
}

?>