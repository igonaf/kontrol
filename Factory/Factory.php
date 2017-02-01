<?php
/**
 * Description of Factory
 *
 * @author icstime
 */
class Factory {
    
    static function buildCar($car_type){
        $car = 'car' . ucfirst($car_type);
        
        if(class_exists($car)){
            return new $car();
        } else {
            echo 'Wrong car name';
        }
    }
}