<?php

class personal{
    public static $name = "Towhid Hasan";

    public static function show(){
        echo self::$name;
    }
}

personal::$name;
personal::show();


?>