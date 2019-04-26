<?php 
class config{

	public function connexion(){
//$con=mysql_connect()
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="romanic3";
		

		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		return $conn;
	}
}