<?php

/**
 * Description of Team
 *
 * @author icstime
 */
class Team implements Observable{
    private $_observers;
    
    public function addObserver(\Observer $observer) {
        $this->_observers[] = $observer;
    }

    public function fireEvent() {
        foreach ($this->_observers as $observer) {
           $observer->update();
        }
    }
    
    function Event($is_goal){
        if($is_goal){
          $this->fireEvent();
        } else {
            echo 'no event';
        }
    }

}
