<?php

abstract class parentClass{

    abstract protected function calc($a, $b);
}


class childCllas extends parentClass{
    public function calc($c, $d){
        echo $c + $d;
    }
}

$obj = new childCllas();
$obj->calc(10,5);

?>