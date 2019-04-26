<?php 
include_once '../entites/element.php';

if (isset($_POST['search']) && !empty($_POST['search'])) {

	$search = $_POST['search'];
    $db = Config::getConnexion();
    $sql = "SELECT * FROM  liste_commandes join client where liste_commandes.id_Clt = client.id AND liste_commandes.id_Commande LIKE '%$search%'";
    $products=$db->query($sql);
    while($result=$products->fetch()):?>
        <tr data-expanded="true">
                <td><?php echo $result['id_Commande'];?></td>
                <td><?php echo $result['mail'];?></td>
                <td><?php echo $result['id_Clt'];?></td>
                <td><?php echo $result['date'];?></td>
                <td width="10%">
                    <!--form action="print_pdf.php" method="Post">
                        <input type="hidden" name="id" value="<?php// echo $result['id_Commande']; ?>">
                        <input class="fa fa-times text-danger text" height="5%" width="8%" type="image" value = "submit" name="" src="images/d.png" />
                    </form>
                    <form>
                        <input type="image"  value="submit" name="" src="">Detail
                    </form-->
                    <a href="commande_pdf.php?id=<?php echo $result['id_Commande']; ?>">
                        <input class="fa fa-times text-danger text" height="10%" width="30%" type="image" value = "submit" name="" src="images/ddd.png" />
                    </a>
                    <a href="afficher_detail.php?id=<?php echo $result['id_Commande']; ?>">
                        <input class="fa fa-times text-danger text" height="10%" width="30%" type="image" value = "submit" name="detail" src="images/hhh.png" />
                    </a>
                </td>
                <td><?php echo $result['total'];?></td>
            </tr>
    <?php endwhile;
}
else{
	header("Location: basic_table2.php");
		exit;
}
?>