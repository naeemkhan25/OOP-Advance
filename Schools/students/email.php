<?php
namespace Schools\students;
class Email{
    private $email;
    function setEmail($email){
        $this->email=$email;
    }
    function getEmail(){
       echo "student Email";
    }
}