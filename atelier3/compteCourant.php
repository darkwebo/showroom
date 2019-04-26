<?PHP
include "compte.php"
class CompteC extends Compte{
function _construct($id,$numCompte,$solde,$cin){
    parent::_construct($id,$numCompte,$solde,$cin);
  }

}

?>
