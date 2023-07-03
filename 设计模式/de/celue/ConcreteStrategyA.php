<?php


include_once "./Strategy.php";
class ConcreteStrategyA extends Strategy{

	public funciton __construct($operation) {

		switch($operation) {


		}
	}

	
    public function algorithmInterface()
    {
        // TODO: Implement algorithmInterface() method.
        echo "算法 a实现\n";
    }
}