<?php
spl_autoload_register(function ($className){
    $path=strtolower(str_replace("Schools\\",'',$className).".php");
    $path=str_replace("\\",DIRECTORY_SEPARATOR,$path);
    include_once($path);

});