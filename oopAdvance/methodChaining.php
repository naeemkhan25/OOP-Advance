<?php
class MethodChaining{
    private $string;
    private $search;
    function __construct($string)
    {
        $this->string=$string;
    }
    function search($search){
       $this->search=$search;
       return $this;
    }
    function replace($replace){
        if(!isset($this->search)){
            throw new Exception("noting to search");
        }
        $this->string=str_replace($this->search,$replace,$this->string);
        $this->search="";
       return $this;
    }
    function uperCase(){
        $this->string=strtoupper($this->string);
        return $this;
    }
    function prints(){
        echo $this->string;
    }
}
$methodchain=new MethodChaining("Hello World");
$methodchain->search("World")->replace("Earth")->uperCase()->prints();