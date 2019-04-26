<?PHP
  class sign_up
  { 
  //attributs
    private $id;
    private $nom ; 
    private $prenom ;
    private $mail ;
    private $password;
    private $phone;
    

    //methodes
    public function __construct()
    {
    }
    public function getid(){return $this->id;}
    public function getnom(){return $this->nom;}
    public function getprenom(){return $this->prenom;}
    public function getmail(){return $this->mail;}
    public function getpassword(){return $this->password;}
    public function getphone(){return $this->phone;}

/////////////////////////////

    public function setnom($nom){$this->nom=$nom;}
    public function setprenom($prenom){$this->prenom=$prenom;}
    public function setmail($mail){$this->mail=$mail;}
    public function setpassword($password){$this->password=$password;}
    public function setphone($phone){$this->phone=$phone;}
    public function setid($id){$this->id=$id;}

}
?>