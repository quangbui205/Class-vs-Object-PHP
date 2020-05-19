<?php
include("class_rectangle.php");
?>
<?php
$width=10;
$heigth=20;
$rectangle = new rectangle($width,$heigth);
echo "First ".$rectangle->display()."<br>";
echo "Area: ".$rectangle->getArea()."<br>";
echo "Perimeter: ".$rectangle->getPermimeter()."<br>";

$rectangle->width=30;
$rectangle->height=40;
echo "Second ".$rectangle->display()."<br>";
echo "Area: ".$rectangle->getArea()."<br>";
echo "Perimeter: ".$rectangle->getPermimeter()."<br>";
?>