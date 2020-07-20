<?php
namespace Devoir_oop_php_guy_fleury\Figure;

class Cercle extends Figure{
    private $rayon;
   private $pi = 3.14;

   public function __construct($rayon_){
        $this->rayon = $rayon_;
    }
    public function surface(){
        return $this->pi * pow($this->rayon,2);
    }
   public function perimetre(){
        return $this->pi * $this->rayon * 2;
    }

}

?>
