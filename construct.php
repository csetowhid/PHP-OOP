<?php
class person{  
    public $name;  //Global Scope

    function __construct($n)  //$n Local Scope
    {
        $this->name = $n;
    }

    function show(){
        echo "Your Name:" . $this->name;
    }
}
$object = new person('Towhid'); 
echo $object->show();
