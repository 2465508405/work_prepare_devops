<?php

include_once "./Strategy.php";
class ConcreteStrategyC extends Strategy{

    public function algorithmInterface()
    {
        // TODO: Implement algorithmInterface() method.

        echo "算法c\n";
    }

}