<?php

class Utilisateur{

protected $nom ;
protected $email ;


public function __construct($nom,$email)
{
    $this->nom = $nom;
    $this->email = $email ;
    
}


public function getNom()
{
return $this->nom ;
}

public function setNom($nom)
{
  $this->nom = $nom ;
}

public function getEmail()
{
return $this->email ;
}

public function setEmail($email)
{
  $this->email = $email ;
}

public function afficherDetails(){

    return "My name is " . $this->nom .  " My email is " . $this->email ;

}


}










?>