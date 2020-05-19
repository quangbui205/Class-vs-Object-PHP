<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="numA" placeholder="Nhập Hệ số A"><br>
    <input type="number" name="numB" placeholder="Nhập Hệ số B"><br>
    <input type="number" name="numC" placeholder="Nhập Hệ số C"><br>
    <input type="submit" value="Find"><br>
</form>
<?php include("class_QuadraticEquation.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $numA=$_POST['numA'];
    $numB=$_POST['numB'];
    $numC=$_POST['numC'];
    $equation = new quadraticEquation($numA,$numB,$numC);
    if($equation->getDelta()<0)
    {
        echo "The equation has no roots";
    }
    if($equation->getDelta()==0)
    {
        echo "Phuong trinh co nghiem duy nhat: ".$equation->getRoot();
    }
    if($equation->getDelta()>0)
    {
        echo "Phuong trinh co 2 Nghiem la: ".$equation->getRoot1()." vs ".$equation->getRoot2();
    }
}
?>
</body>
</html>

