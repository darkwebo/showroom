<?PHP
class car{
	
	private $make;
	private $price;
	private $model;
	private $body_type;
	private $name;
	private $description;
	private $year;
	private $mileage;
	private $cv;
	private $fuel_type;
	private $transmission;
	private $photo;
	private $opt;

	
	function __construct($make,$price,$model,$body_type,$name,$description,$year,$mileage,$cv,$fuel_type,$transmission,$photo,$opt){
		$this->make=$make;
		$this->price=$price;
		$this->model=$model;
		$this->body_type=$body_type;
		$this->name=$name;
		$this->description=$description;
		$this->year=$year;
		$this->mileage=$mileage;
		$this->cv=$cv;
		$this->fuel_type=$fuel_type;
		$this->transmission=$transmission;
		$this->photo=$photo;
		$this->opt=$opt;

	}
	
	function getmake(){
		return $this->make;
	}
	function getprice(){
		return $this->price;
	}
	function getmodel(){
		return $this->model;
	}
	function getname(){
		return $this->name;
	}
	function getbody_type(){
		return $this->body_type;
	}
	
	function getdescription(){
		return $this->description;
	}
	function getyear(){
		return $this->year;
	}
	function getcv(){
		return $this->cv;
	}
	function gettransmission(){
		return $this->transmission;
	}
	function getphoto(){
		return $this->photo;
	}
	function getmileage(){
		return $this->mileage;
	}
	function getfuel_type(){
		return $this->fuel_type;
	}
	function getopt(){
		return $this->opt;
	}
	function setopt($opt){
		$this->opt=$opt;
	}
	
		function setprice($price){
		$this->price=$price;
	}
	function setmodel($model){
		$this->model=$model;
	}
	function setname($name){
		$this->name=$name;
	}
	function setbody_type($body_type){
		$this->body_type=$body_type;
	}
	function setmake($make){
		$this->make=$make;
	}
	function setcv($cv){
		$this->cv=$cv;
	}
	function setmileage($mileage){
		$this->mileage=$mileage;
	}
	
	
}

?>