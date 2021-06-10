<?php
class Animal{
    static $name;
    static function setData($name){
        self::$name=$name;
        self::Name();
    }
    static public function Name(){
        echo "my name is naeem".self::$name;
    }
    public function email(){
       echo "this is email";
    }
}
Animal::setData("dog");
//constant sob somay static hisabe thake .
