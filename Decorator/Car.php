<?php

/**
 * Description of Car
 *
 * @author icstime
 */
class Car implements ICar{
    protected $_ABS = 'ABS';
    protected $_heated_seats = 'heated_seats';
    public $_car = [];
    
    public function calcCar() {
        $this->_car[] = $this->_ABS;
        $this->_car[] = $this->_heated_seats;
    }
    
    public function getCarParams($separator) {
        echo implode($separator, $this->_car);
    }

}
