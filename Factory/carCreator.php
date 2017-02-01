<?php


/**
 * Description of carCreator
 *
 * @author icstime
 */
class carCreator {
    
    function load($car_type){
        return Factory::buildCar($car_type);
    }
}
