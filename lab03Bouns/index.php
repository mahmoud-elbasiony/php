<?php

require("vendor/autoload.php");
require_once("views/form.php");
use Aws\S3\S3Client;
//var_dump($_FILES);
if(isset($_FILES["fileToUpload"])){
    if($_FILES["fileToUpload"]["size"]>300000){
        die( "<h3>File size is too big.</h3>");
    }elseif(stristr($_FILES["fileToUpload"]["type"],"image") !=false){
        die( "<h3>File is Not supported</h3>");
    }else{
        upload_to_s3();
    }
}

function upload_to_s3( ){
    $s3 = S3Client::factory(array(
        'credentials' => array(
            'key' => '',
            'secret' => '',
        ), 'region' => 'eu-north-1',
        'version' => 'latest'
    ));
    try{
        $id=uniqid();
        $s3->upload("php-images-upload-test",$id,$_FILES["fileToUpload"]["tmp_name"]);    
    }catch(Aws\s3\s3Exception $e){
        echo $e;
    }
}




