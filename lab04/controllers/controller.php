<?php

function return_response($data,$status_code){
    header("Content-Type: application/json");
    http_response_code($status_code);
    echo(json_encode($data));
}

function get_items_by_id($id=""){
    try{
        
        $sql_handler=new MySQLHandler("items");
        $result=$sql_handler->get_record_by_id($id);
        
        return $result;
    }catch(Exception  $err){
        $err=["error"=>_MYSQL_SERVER_ERROR_];
        return return_response($err,500);
    } 
}
function get_items_paginated($start=0){
    try{

        $sql_handler=new MySQLHandler("items");
        $result=$sql_handler->get_data(array(),$start);
        return $result;
    }catch(Exception  $err){
        $err=["error"=>_MYSQL_SERVER_ERROR_];
        return return_response($err,500);
    } 
}

function delete_items_by_id($id=""){
    try{
        $sql_handler=new MySQLHandler("products");
        $result=$sql_handler->delete($id);
        return $result;
    }catch(Exception  $err){
        $err=["error"=>_MYSQL_SERVER_ERROR_];
        return return_response($err,500);
    } 
}

function save_product(){
    $fields=["name","price","units_in_stock"];
    $data = json_decode(file_get_contents('php://input'), true);
    foreach($fields as $field){
        if(!isset($data[$field]) || empty($data[$field])){
            $err=["error"=> "data insuffient"];
            return return_response($err,404);
        }
    }
    try{
        $sql_handler=new MySQLHandler("products");
        if($sql_handler->save($data)){
            return $result;
        }
    }catch(Exception  $er){
        $err=["error"=> _MYSQL_SERVER_ERROR_];
        return return_response($err,500);
    }
}

function update_product($id){
    $fields=["name","price","units_in_stock"];
    $data = json_decode(file_get_contents('php://input'), true);
    try{
        $sql_handler=new MySQLHandler("products");
    if($sql_handler->update($data,$id)){
        return $result;
    }else{
        $err=["error"=> _NO_RESOURSES_];
        return return_response($err,404);
    }
    }catch(Exception  $er){
        $err=["error"=> _MYSQL_SERVER_ERROR_];
        return return_response($err,500);
    }
}