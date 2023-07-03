<?php

include_once("./Component.php");
class ConcreteComponent extends Component{

    public function operation(){
        echo "具体对象的操作\n";
    }
}