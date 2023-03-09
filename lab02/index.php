<?php

$error="";
$name="";
$email="";
$message="";
require_once("config.php");
require_once("validation.php");
require_once("functions.php");
// require_once("vendor/autoload.php");


// var_dump($_GET);
if(isset($_GET["page"]))
    if($_GET["page"]=="getAllUSers"){
        require_once("AllUsers.php");
        exit();
    }

if(empty($_POST)){
    require_once("form.php");
    exit();
}

// echo $name;
if(!isValidByLength(__MAX_NAME_LENGTH__,$name)){
    $error="name is not valid";
    $name="";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error="email is not valid";
    $email="";
}elseif(!isValidByLength(__MAX_MESSAGE_LENGTH__,$message)){
    $error="message is not valid";
    $message="";
}else{
    save_to_file();
    require_once("thanks.php");
    exit();
}

require_once("form.php");
?>

