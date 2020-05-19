<?php
class person
{
    var $name;
    var $age;
    private $pinn_number;
    function __construct($person_age)
    {
        $this->age = $person_age;
    }
    function set_age($new_age)
    {
        $this->age = $new_age;
    }
    function get_age()
    {
        return $this -> age;
    }
    function set_name($new_name)
    {
        $this ->name = $new_name;
    }
    function get_name()
    {
        return $this->name;
    }
}
?>