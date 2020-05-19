<?php
CONST SLOW =1;
define('MEDIUM', 2);
define("FAST", 3);
class fan
{
    private $speed = SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    public function toString()
    {
        if($this->on)
        {
            echo "speed:".$this->speed." color:".$this->color." Fan is on";
        }
        else
        {
            echo "speed:".$this->speed." color:".$this->color." Fan is off";
        }
    }
}