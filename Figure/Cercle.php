<?php
namespace Devoir_oop_php_guy_fleury\Figure;

class Cercle extends Figure{
   private $rayon;
   const PI = 3.14;

   public function __construct($rayon_){
        $this->rayon = $rayon_;
    }
    public function surface(){
        return self::PI * pow($this->rayon,2);
    }
   public function perimetre(){
       return self::PI * $this->rayon * 2;
    }

}

?>
