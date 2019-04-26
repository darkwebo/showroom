<?PHP
include "compte.php"
class CompteE extends Compte{
private $tauxInteret ;
function _construct($id,$numCompte,$solde,$cin){
  parent::_construct($id,$numCompte,$solde,$cin,$tauxInteret);
  $this->tauxInteret=$tauxInteret;
}
function getTauxInteret(){
  return $this->tauxInteret;
}
function setTauxInteret()
  {
    $this->tauxInteret=$tauxInteret;
  }

}
?>
