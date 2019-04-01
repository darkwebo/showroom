<?php
session_start();
include("global.php");
// print_r($_SESSION);
$cu = isset($_SESSION['cu']) ? $_SESSION['cu'] : ""; // cu est une variable pour vrifier s'il est connecté ou pas

if(empty($cu)) {
	include("templates/connexion.htm");
} else {
	include("templates/main.htm");
}
//echo '<pre>';
//print_r(get_included_files());
//echo '</pre>';
?>
