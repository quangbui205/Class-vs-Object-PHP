
<?php
include("test_class_lib.php");
?>
<?php
$stefan = new person();
$jimmy = new person;

$stefan->set_name("Stefan Donald");
$jimmy->set_name("Jimmy Brick");

echo "Stefan'full name: ".$stefan->get_name()."<br>";
echo "Jimmy' full name: ".$jimmy->get_name();
?>

