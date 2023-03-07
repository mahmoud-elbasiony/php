<?php

    $name=isset($_POST["name"])?$_POST["name"]:"";
    $email=isset($_POST["email"])?$_POST["email"]:"";
    $message=isset($_POST["message"])?$_POST["message"]:"";
    // var_dump($_POST);


function isValidByLength($len,$input){
    // echo strlen($input) > $len || empty($input);
    if(empty($input)  || strlen($input) > $len ){
        return false;
    }else{
        return true;
    }
}

?>