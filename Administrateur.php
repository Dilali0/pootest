<?php

require_once './Article.php';

class Administrateur extends Utilisateur{

 private $role ;

public function __construct($nom,$email,$role)
{
    parent::__construct($nom,$email);
    $this->role = $role ;
}

public function getRole(){
   
    return $this->role ;
 
}

public function setRole($role){
   
     $this->role = $role ;
 
}

public function afficherAuteur(){

    return "My name is " . $this->nom .  " My email is " . $this->email . " My rule is  :" . $this->role ;

}

public function supprimerArticle(Article $article){

 return 'le ' .$article . 'est supprimer' ;


}



}