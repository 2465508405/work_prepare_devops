<?php

include_once "./Strategy.php";
class ConcreteStrategyB extends Strategy{

    public function algorithmInterface()
    {
        // TODO: Implement algorithmInterface() method.

        echo "算法b\n";
    }
}