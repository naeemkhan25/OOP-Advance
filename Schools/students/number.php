<?php
namespace Schools\students;
class Number{
    private $Number;
    function setNumber($Number){
        $this->Number=$Number;
    }
    function getNumber(){
        return $this->Number;
    }
}