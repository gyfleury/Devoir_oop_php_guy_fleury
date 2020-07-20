<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Devoir PHP OOP</title>
</head>
<body>
<?php
include 'Figure/Figure.php';
include 'Figure/Rectangle.php';
include 'Figure/Cercle.php';
include 'Figure/Triangle.php';

use Devoir_oop_php_guy_fleury\Figure\Figure;
use Devoir_oop_php_guy_fleury\Figure\Rectangle;
use Devoir_oop_php_guy_fleury\Figure\Cercle;
use Devoir_oop_php_guy_fleury\Figure\Triangle;

echo 'Figure Rectangle<br>';
$rect = new Rectangle(3,4);

echo 'Surface : ' . $rect->surface() . '<br>';
echo 'Perimetre : ' . $rect->perimetre() . '<br>';

echo 'Figure Cercle<br>';

$c = new Cercle(5);

echo 'Surface : ' . $c->surface() . '<br>';
echo 'Perimetre : ' . $c->perimetre() . '<br>';

echo '<br> Figure Tringle <br>';
$t = new Triangle(3,4,5);

echo 'Surface :' . $t->surface() . '<br>';
echo 'Perimetre :' . $t->perimetre() . '<br>'; 

?>

</body>
