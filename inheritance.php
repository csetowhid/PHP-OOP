<?php
class class_1{

    function func_1(){
        echo "Function 1";
    }
}

class class_2 extends class_1{
    function func_1(){          // Overwrite Parent Class Function
        echo "Function 2"; 
    }
}
$obj = new class_2();  
$obj->func_1();
