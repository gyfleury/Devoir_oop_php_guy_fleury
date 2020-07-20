<?php
namespace Devoir_oop_php_guy_fleury\Figure;

class Triangle extends Figure{
   private $a,$b,$c;

   public function __construct($a_,$b_,$c_){
        $this->a = $a_;
        $this->b = $b_;
       $this->c = $c_;
    }

    public function surface(){
        $somme = ($this->a + $this->b + $this->c) / 2;
        $surf = sqrt($somme * ($somme - $this->a) * ($somme - $this->b)
                     * ($somme - $this->c));
       return $surf;
    }
    public function perimetre(){
        return $this->a + $this->b + $this->c;
   }

}

?>
