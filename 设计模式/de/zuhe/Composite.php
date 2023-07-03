<?php

include_once "./Component.php";
class Composite extends Component{

    private $children = [];

    public function add(Component $c){

        array_push($this->children,$c);
    }

    public function remove(Component $c){

        foreach($this->children as $key => $value){

            if($c == $value){

                unset($this->children[$key]);
            }
        }
    }

    public function display($depth){
        
        echo str_repeat('-',$depth).$this->name."\n";
        foreach($this->children as $component){

            $component->display($depth+2);
        }
    }
}