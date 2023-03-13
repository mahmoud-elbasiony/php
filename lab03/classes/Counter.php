<?php


class Counter{


    private $_count;
    
    public function __construct(){
        $this->_count=$this->get_count();
    }
    public function get_count(){
        if(file_exists(_FILE_NAME_)){
            return intval(file_get_contents(_FILE_NAME_));
        }else{
            return 0;
        }
    }

    public function increment(){
        if(!isset($_SESSION[_SESSION_KEY_COUNT_])){
            $_SESSION[_SESSION_KEY_COUNT_]=true;
            $this->_count++;
            return  $this->_count;
        }
        return false;
    }
    public function update(){
        $fp=fopen(_FILE_NAME_,"w+");
        fwrite($fp,$this->_count);
        fclose($fp);
    }
    public function increment_update(){
        $this->increment();
        $this->update();
    }


}