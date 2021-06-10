<?php
abstract class Animal{
    protected $name;
    public function __construct($name){
        $this->name=$name;
        $this->sayhi();
    }
    public function sayhi(){
        echo "{$this->name}";
    }
    abstract public function eat();
}
class dog extends Animal{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function eat()
    {
        echo "i am eating";
    }
}
$dog=new dog("dog");
