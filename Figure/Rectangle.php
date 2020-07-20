<?php
namespace Devoir_oop_php_guy_fleury\Figure;

class Rectangle extends Figure{
    private $longueur,$largeur;
    
    public function __construct($long_,$larg_){
        $this->longueur = $long_;
        $this->largeur = $larg_;
    }
    
    public function surface(){
        return $this->longueur * $this->largeur;
    }
    public function perimetre(){
        return ($this->longueur + $this->largeur) * 2;
    }
    
}
+
+?>
