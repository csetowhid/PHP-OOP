<?php

class class_1{
    protected $num;

    function __construct()
    {
        $this->num = 1;
    }
}

class class_2 extends class_1{
    function getNum(){  
        return $this->num;
    }
}

$obj = new class_2();
echo $obj->getNum();



?>