<?php
interface A{
    public function hello();
}

interface B{
    public function bye();
}

class C implements A, B{
    public function hello(){
        echo "Hello";
    }

    public function bye(){
        echo "bye";
    }
}

$obj = new C();
$obj->hello();