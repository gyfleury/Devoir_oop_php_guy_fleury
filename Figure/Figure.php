<?php
namespace Devoir_oop_php_guy_fleury\Figure as OOP_GEO;

abstract class Figure {

    // force class that extend it to implement these methods
    abstract protected function surface();
    abstract protected function perimetre();
    
}

?>
