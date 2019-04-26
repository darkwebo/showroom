<?PHP
  class mail
  { 
  //attributs
    private $id ; 
    private $password;
    private $mail;

    //methodes
    public function __construct()
    {
    
    }

    public function getpassword(){return $this->password;}
    public function getid(){return $this->id;}

/////////////////////////////

    public function setpassword($password){$this->password=$password;}
    public function setid($id){$this->id=$id;}
    public function setmail($mail){$this->mail=$mail;}

}
?>