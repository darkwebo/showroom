<?PHP

  class log_in
  { 
  //attributs
    private $id ; 
    private $password;

    //methodes
    public function __construct()
    {
    
    }

    public function getpassword(){return $this->password;}
    public function getid(){return $this->id;}

/////////////////////////////

    public function setpassword($password){$this->password=$password;}
    public function setid($id){$this->id=$id;}

}
?>