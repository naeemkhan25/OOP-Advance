<?php
interface Animal{
   function eat();
   function dog();
   function data();

}
class dog implements Animal{
    private $dog;
    function __construct($dog){
        $this->dog=$dog;
    }
    public function data()
    {
       echo $this->dog;
    }
    public function eat()
    {
        // TODO: Implement eat() method.
    }
    public function dog()
    {
        // TODO: Implement dog() method.
    }
}
$dog=new dog("dog");
//echo $dog instanceof Animal;
//aiter maddhome check kora jay aita kon class k extends ba

