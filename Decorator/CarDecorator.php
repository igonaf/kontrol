<?php

/**
 * Description of CarDecorator
 *
 * @author icstime
 */
abstract class CarDecorator implements ICar {
    protected $car;
    protected $extra_params = [];
            
    function __construct(ICar $car) {
        $this->car = $car;
    }
    
    function addExtraParams($data){
        $this->extra_params = array_merge($this->extra_params, $data);
    }
    
    abstract public function calcCar();
    abstract public function getCarParams($separator);
}
