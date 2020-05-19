<?php
class quadraticEquation
{
    var $numA;
    var $numB;
    var $numC;
    function __construct($numA,$numB,$numC)
    {
        $this->numA=$numA;
        $this->numB=$numB;
        $this->numC=$numC;
    }
    public function getDelta()
    {
        return ($this->numB*$this->numB) - 4*$this->numA*$this->numC;
    }
    public function getRoot1()
    {
        return (-$this->numB + sqrt($this->getDelta()))/(2*$this->numA);
    }
    public function getRoot2()
    {
        return (-$this->numB - sqrt($this->getDelta()))/(2*$this->numA);
    }
    public function getRoot()
    {
        return (-$this->numB/(2*$this->numA));
    }
}
?>