<?php
class getr_setr{
    private $paramiter;
    function __construct(){
        $this->paramiter=[];
    }
    function __isset($name)
    {
        if(!isset($this->paramiter[$name])){
            echo "{$name} is not found";
            return false;
        }
        return true;
    }

    function __set($name, $value)
    {
        $this->paramiter[$name]=$value;
    }
    function __get($name){
        return $this->paramiter[$name];
    }
    function getParamiter(){
        return $this->paramiter;
    }
    function __unset($name){
        print_r($this->paramiter);
        unset($this->paramiter[$name]);
        print_r($this->paramiter);
    }
}
$value=new getr_setr();
$value->displacement="motorsycle";
$value->mileage="150cc";
$value->size="155";
echo $value->displacement."<br/>";
if(isset($value->car)) {
    echo $value->car;
}
//$ARR=$value->getParamiter();
//print_r($ARR);
unset($value->mail);


