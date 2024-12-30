<?php

require_once './Autaur.php';
class Article {

    private $titre ;
    private $contenu ;
    private $datePublication ;
    private Auteur $auteur ;

     public function __construct($titre,$contenu,$datePublication,$auteur){

         $this->titre = $titre ;
         $this->contenu = $contenu ;
         $this->datePublication = $datePublication ;
         $this->auteur = $auteur ;
     }



     public function getTitre(){
       
        return $this->titre ;

     }


     public function setTitre($titre){
       
        $this->titre = $titre ;

     }

     public function getContenu(){
       
        return $this->contenu ;

     }

     public function setContenu($contenu){
       
        $this->contenu = $contenu ;

     }
     

     public function getDatePublication(){
       
       return  $this->datePublication  ;

     }

     public function setDatePublication($datePublication){
       
        $this->datePublication = $datePublication ;

     }

     public function getAuteur(){
       
        return  $this->auteur ;
 
      }
 
      public function setAuteur($auteur){
        
         $this->auteur = $auteur ;
 
      }
 
      public function afficherArticle(){

        return " Le titre   : " . $this->titre .  " le contenu : " . $this->contenu .  "  la date de Publication : " . $this->datePublication .  "  l' auteur : " . $this->auteur  ;
    
    } 
    
    }

?>