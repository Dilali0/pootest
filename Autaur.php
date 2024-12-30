
<?php
require_once './Article.php';

class Auteur extends Utilisateur{

 private $biographie ;

public function __construct($nom,$email,$biographie)
{
    parent::__construct($nom,$email);
    $this->biographie = $biographie ;
}

public function getBiographie(){
   
    return $this->biographie ;
 
}

public function setBiographie($biographie){
   
     $this->biographie = $biographie  ;
 
}

public function afficherAuteur(){

    return "My name is " . $this->nom .  " My email is " . $this->email . " My Biographie :" . $this->biographie ;

}

public function creerArticle($titre,$contenu,$datePublication = '2024-20-02',$auteur = 'ismail'):Article{

 return new Article($titre,$contenu,$datePublication,$auteur);

}

}







?>