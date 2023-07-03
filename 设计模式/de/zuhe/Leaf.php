<?php

include_once("./Component.php");
class Leaf extends Component{


    public function add(Component $c){

        echo "cannot add a leaf\n";
    }

    public function remove(Component $c){

        echo "can not remove to a leaf\n";
    }

    public function display($depth){

        echo str_repeat('-', $depth).$this->name."\n";
    }
}