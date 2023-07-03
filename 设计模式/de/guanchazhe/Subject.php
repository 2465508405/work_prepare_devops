<?php

include_once "./Observer.php";
abstract class Subject{

    private $observers = [];

    public function attach(Observer $observer){

        array_push($this->observers,$observer);
    }

    public function detach($observer){

        foreach($this->observers as $k => $value){

            if($observer === $value){
                unset($this->observers[$k]);
            }
        }
    }

    public function notify(){

        foreach($this->observers as $observer){
            
            $observer->update();
        }
    }
}