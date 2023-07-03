<?php


include_once "./Observer.php";

class ConcreteObserver extends Observer{

    private $name;
    private $subject;

    function __construct(ConcreteSubject $subject,$name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    public function update()
    {
        // TODO: Implement update() method.
        echo "观察者".$this->name.",观测到状态改变了，新状态是：".$this->subject->getState()."\n";
    }
}