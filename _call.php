<?php
class _call{
 function __call($name,$arguments){
     if('mail'==$name){
         if($arguments){
             echo "this is run{$arguments[0]}";
         }
     }
 }

 static function __callStatic($name, $arguments)
 {
     if($name=='name'){
         echo "name is the best";
     }
 }
}

_call::name();
$call=new _call();
$call->mail("123");