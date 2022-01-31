<?php

trait hello{

    public function sayHello(){
        echo "Hello Everyone";
    }
}


class base{
    use hello;
}

class base2{
    use hello;
}

$obj = new base();
$obj2 = new base2();
$obj->sayHello();
$obj2->sayHello();

?>