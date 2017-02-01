<?php

/**
 * Description of Singleton
 *
 * @author icstime
 */
class Singleton {
    protected static $_instance;
    private $data;

    public static function getInstance(){
        if(NULL === self::$_instance){
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    private function __construct() {
        
    }
    
    private function __clone() {
        
    }
    
    function setData($data){
        $this->data = $data;
    }
    
    function getData(){
        return $this->data;
    }
}
