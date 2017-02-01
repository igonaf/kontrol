<?php
/**
 * Description of Fan
 *
 * @author icstime
 */
class Fan implements Observer{
    private $_name;
    
    public function update() {
        echo $this->_name . ' screems GOL';
    }
    
    function __construct($name) {
        $this->_name = $name;
    }
    
    function getName(){
        return $this->_name;
    }

}
