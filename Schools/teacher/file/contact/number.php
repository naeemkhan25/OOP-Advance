<?php
namespace Schools\Teacher\File\Contact;
class Number{
    private $Number;
    function setNumber($Number){
        $this->Number=$Number;
    }
    function getNumber(){
        echo "this is contact teacher Number";
    }
}