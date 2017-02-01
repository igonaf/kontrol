<?php

/**
 * Description of MediumCar
 *
 * @author icstime
 */
class MediumCar extends CarDecorator {
    
    public function calcCar() {
        $this->car->calcCar();
        $this->car->_car = array_merge($this->car->_car, $this->extra_params);
       
    }

    public function getCarParams($separator) {
        echo implode($separator, $this->car->_car);
    }

}
