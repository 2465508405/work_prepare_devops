<?php


class Context {

    private $strategy;

    //策略加简单工厂模式
    public function __construct($operate)
    {
    	switch($operate) {
    		case '+':
				$this->strategy = new ConcreteStrategyA();
			break;
			case '-':
				$this->strategy = new ConcreteStrategyB();
			break;
			case '*':
				$this->strategy = new ConcreteStrategyC();
			break;

    	}
        // $this->strategy = $strategy;
    }

    // public function __construct(Strategy $strategy)
    // {
    //     $this->strategy = $strategy;
    // }

    public function contextInterface()
    {
        $this->strategy->AlgorithmInterface();
    }
}