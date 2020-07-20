<?php
namespace Devoir_oop_php_guy_fleury\Figure;

abstract class Figure {

    // force class that extend it to implement these methods
    abstract protected function surface();
    abstract protected function perimetre();
    
}

?>
