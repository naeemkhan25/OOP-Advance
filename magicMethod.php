<?php
class MagicMethod{
    private $name,$email,$phone;
    private $arr=array();
    function __construct($name='',$email='',$phone=''){
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
    }
    function __get($prop){
       return $this->$prop;
    }
    function __set($name, $value)
    {
        $this->arr['name']=$value;
    }


}
$magicMethod=new MagicMethod("naeem","naeemkhan.cse@gmail.com",'04320487320');
$magicMethod->email="khan.cse";
echo $magicMethod->email;

