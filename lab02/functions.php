<?php

function save_to_file(){
    $fp=fopen(_SAVING_FILE_,"a+");
    
    $writtenString=date("F j Y g:i a")." , ".$_SERVER["REMOTE_ADDR"]." , ".implode(" , ",array_slice($_POST,0,2));
    
    fwrite($fp,$writtenString.PHP_EOL);
    fclose($fp);

}

function convert_file_to_array(){
    return file(_SAVING_FILE_);

}