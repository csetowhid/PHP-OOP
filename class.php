<?php
class Calculation{  //Class
    public $a, $b, $c; //Properties

    function sum(){ //Methods
        $this->c = $this->a + $this->b;
        return $this->c;
    }

}
$object = new Calculation();  //Object
$object->a = 10;
$object->b = 20;
echo $object->sum();
echo '<br>';

class Addition{
    function summ($a,$b){
        $c = $a + $b;
        return $c;
    }
}

$obj = new Addition();
echo $obj->summ(5,10);