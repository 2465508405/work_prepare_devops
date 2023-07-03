<?php

include_once("./Component.php");
abstract class Decorator extends Component{

    protected $component;

    public function setComponent($component){

        $this->component = $component;
    }

    public function operation(){

        if($this->component != null){

            $this->component->operation();
        }
    }
}