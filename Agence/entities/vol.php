<?php


class vol
{
 private $ref;
 private $compagnie;
 private $destination;
 private $datev;
 private $hdepart;
 private $harrivee;
 

 //public function __construct () {}

 public  function __construct($ref,$compagnie,$destination,$datev,$hdepart,$harrivee) {
     $this->ref=$ref;
     $this->compagnie=$compagnie;
     $this->destination=$destination;
     $this->datev=$datev;
     $this->hdepart=$hdepart;
     $this->harrivee=$harrivee;

 }

 public function getRef() {
     return $this->ref;
 }

 public  function getCompagnie() {
     return $this->compagnie;
 }

 public function getDestination() {
     return $this->destination;
 }

 public function getDate() {
     return $this->datev;
 }

 public function getHdepart() {
     return $this->hdepart;
 }
  public function getHarrivee() {
     return $this->harrivee;
 }

 public function setRef($ref) {
     $this->ref=$ref;
 }

 public function setCompagnie($compagnie){
     $this->compagnie=$compagnie;
 }

 public function setDestination($destination) {
     $this->destination=$destination;
 }

 public function setDate($date) {
     $this->date=$date;
 }

 public function setHdepart($hdepart) {
     $this->hdepart=$hdepart;
 }
  public function setHarrivee($harrivee) {
     $this->harrivee=$harrivee;
 }

}
?>