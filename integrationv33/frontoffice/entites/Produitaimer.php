<?php
class Produit_aimer
{
	private $id; 
	private $nom;
	private $client;
	private $prix;

public function get_id(){return $this->id;}
public function get_nom(){return $this->nom;}
public function get_client(){return $this->client;}
public function get_prix(){return $this->prix;}

public function set_id($id){return $this->id=$id;}
public function set_nom($nom){return $this->nom=$nom;}
public function set_client($client){return $this->client=$client;}
public function set_prix($prix){return $this->prix=$prix;}
}