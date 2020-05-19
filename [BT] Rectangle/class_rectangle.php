<?php
class rectangle
{
    public $width;
    public $height;
    function __construct($width,$height)
    {
        $this ->width =$width;
        $this ->height =$height;
    }
    public function getArea()
    {
        return $this->height*$this->width;
    }
    public function getPermimeter()
    {
        return ($this->width+$this->height)*2;
    }
    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
?>