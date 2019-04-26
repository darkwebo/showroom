<?php
include_once "../entites/element.php";

$db=config::getConnexion();

$panier=new panier();
$panierC=new panierC();

if(isset($_GET['id'])){
   $product=$db->prepare('SELECT id FROM produit WHERE id =:id');
   $product->execute(array('id' => $_GET['id'] ));
   $result=$product->fetchAll(PDO::FETCH_OBJ);
   //var_dump($result);
   if(empty($result))
   {
   	 die("ce produit n existe pas");
   }

   $panierC->add($result[0]->id);
}
if(isset($_GET['del'])){
	$panierC->del($_GET['del']);
}

?>
