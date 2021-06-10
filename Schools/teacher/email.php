<?php
namespace Schools\Teacher;
class Email{
    private $email;
    function setEmail($email){
        $this->email=$email;
    }
    function getEmail(){
        echo "teacher Email";
    }
}