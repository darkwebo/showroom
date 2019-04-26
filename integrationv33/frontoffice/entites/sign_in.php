<?PHP
	class sign_in
	{ 
	//attributs
    private $nom ; 
    private $mail ;
    private $password;
    private $id;

    //methodes
    public function __construct()
    {
    }

    public function getnom(){return $this->nom;}
    public function getmail(){return $this->mail;}
    public function getpassword(){return $this->password;}
    public function getid(){return $this->id;}

/////////////////////////////

    public function setnom($nom){$this->nom=$nom;}
    public function setmail($mail){$this->mail=$mail;}
    public function setpassword($password){$this->password=$password;}
    public function setid($id){$this->id=$id;}

}
?>