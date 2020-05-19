<?php
include ("fan.php");
$fan1 = new fan();
$fan1 ->toString();
echo "<br>";
$fan2= new fan();
$fan2 -> setSpeed(MEDIUM) ;
$fan2 -> setColor("yellow");
$fan2->setRadius(5);
$fan2->setOn(true);
$fan2 ->toString();
?>