<?PHP
include_once 'configex1.php';

class lunette
	{ 
	//attributs
    private $referance ; 
    private $marque ; 
    private $type ; 
    private $prix ; 
    private $nbstock ; 

    //methodes
    public function __construct()
    {
      
    }
    public function setref($referance){$this->referance=$referance;}
    public function setmarque($marque){$this->marque=$marque;}
    public function settype($type){$this->type=$type;}
    public function setprix($prix){$this->prix=$prix;}
    public function setnbstock($nbstock){$this->nbstock=$nbstock;}

    public function getref(){return $this->referance;}
    public function getmarque(){return $this->nom;}
    public function gettype(){return $this->type;}
    public function getprix(){return $this->prix;}
    public function getnbstock(){return $this->nbstock;}

    public function maj()
    {
$config=config::getConnexion();
      $sql =$config->prepare("update lunette set marque=?, type=?, prix=?, nombrestock=? where referance=?");

  $sql->bindParam(1,$this->marque);
  $sql->bindParam(2,$this->type);
  $sql->bindParam(3,$this->prix);
  $sql->bindParam(4,$this->nbstock);
  $sql->bindParam(5,$this->referance);
  $sql->execute();
    }
    public function maj2()
    {
$config=config::getConnexion();
      $sql =$config->prepare("update lunette set nombrestock=? where referance=?");

  $sql->bindParam(1,$this->nbstock);
  $sql->bindParam(2,$this->referance);
  
  $sql->execute();
    }

}

$lunette= new lunette();
$lunette->setref($_POST['ref']);
$lunette->setmarque($_POST['mar']);
$lunette->settype($_POST['type']);
$lunette->setprix($_POST['prix']);
$lunette->setnbstock($_POST['nbstock']);


if (isset($_POST['valider'])) 
{
  $lunette->maj();
}




?>
<html>

		<head>
    
		</head>

<body>
  <h1>modification lunette de referance <?php echo $lunette->getref(); ?></h1>
<form method="POST" action="modifer.php">
<table>
    <tr>
    <td><label for="marque"> marque </label></td>   
    <td><input type="text" name="marque"></td>
    </tr>

    <tr>
    <td><label for="type"> type  </label></td>   
    <td> <select>
      <option>lunette de solei</option>
      <option>lunette de vue</option>
    </select></td>
    </tr>

   <tr>
   <td><label for="prix">prix  </label></td>
   <td><input type="text" name="prix"></td>
   </tr>

   <tr>
   <td><label for="nbstock">nbstock </label></td> 
   <td><input type="text" name="nbstock"></td>
   </tr>

   <tr>
   <td>
   <td><input type="submit" value="valider" name="vlider">
  
   </td>

   </tr>
  </table>
</form>
</body>

</html>