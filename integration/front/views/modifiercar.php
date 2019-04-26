<?PHP
include "../core/cars.php";
include "../entites/car.php";


    if (isset($_POST['name'])and isset($_POST['id'])){
$targetDir = "imagesC/";
   $targetDir2 = " ../back/views/imagesC/";
  $fileName = basename($_FILES['Image']['name']);
  $targetFilePath = $targetDir . $fileName;
  $targetFilePath2 = $targetDir2 . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  move_uploaded_file($_FILES['Image']['tmp_name'],$targetFilePath);
  move_uploaded_file($_FILES['Image']['tmp_name'],$targetFilePath2);
  foreach($_POST['opt'] as $selected) {
  $k=$k.$selected;}
		$cars1=new car($_POST['make'],$_POST['price'],$_POST['model'],$_POST['body_type'],$_POST['name'],$_POST['description'],$_POST['year'],$_POST['mileage'],$_POST['cv'],$_POST['fuel_type'],$_POST['transmission'], $targetFilePath ,$k);
	$cars=new cars();
	$cars->modifiercar($cars1,$_POST['id']);

	header('Location:user-dashboard-manage-ads.php');}

                            	 	?>
