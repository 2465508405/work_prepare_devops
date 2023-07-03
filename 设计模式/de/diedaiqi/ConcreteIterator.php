<?php

include_once "./IteratorClass.php";
class ConcreteIterator extends IteratorClass{


    private $aggregate;
    private $current=0;

    public function __construct($aggregate)
    {
        $this->aggregate = $aggregate;
    }

    public function first()
    {
        // TODO: Implement first() method.

        return $this->aggregate->items()[0];
    }

    public function next()
    {
        // TODO: Implement next() method.
        $ret = null;
        $this->current++;
        if($this->current < count($this->aggregate->items())){
            $ret = $this->aggregate->items()[$this->current];
        }

        return $ret;
    }

    public function isDone()
    {
        // TODO: Implement isDone() method.
        return $this->current >= count($this->aggregate->items());
    }

    public function currentItem()
    {
        // TODO: Implement currentItem() method.
        return $this->aggregate->items()[$this->current];
    }

}