<?php
namespace Schools\Teacher\Interf\Images;
use \Schools\Teacher\Interf\Contracts\Imageinter as Imageinter;
use \Schools\Teacher\Email as Email;
class Image implements Imageinter{
    private $Number;
    function setNumber($Number){
        $this->Number=$Number;
    }
    function getNumber(){
        echo "teacher Image";
    }
    function imageinter(){
        echo "this is implements"."<br/>";
        (new Email())->getEmail();
    }
    function datainter(){

    }
}