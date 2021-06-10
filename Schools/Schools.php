<?php
namespace Schools;
include_once "autoloader.php";
use \Schools\Teacher\Email as TeacherEmail;
use \Schools\Students\Email as StudentsEmail;
use \Schools\Teacher\File\Contact\Number as ContactNumber;
use Schools\Teacher\Interf\Images\Image as Image;
$t_email=new TeacherEmail();
$t_email->getEmail();
$s_email=new StudentsEmail();
$s_email->getEmail();
$contactNumber=new ContactNumber();
$contactNumber->getNumber();
$image=new Image();
$image->imageinter();