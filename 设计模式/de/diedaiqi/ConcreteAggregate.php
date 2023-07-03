<?php

include_once './Aggregate.php';
include_once "./ConcreteIterator.php";
class ConcreteAggregate extends Aggregate{


    private $items = [];
    public function createIterator()
    {
        // TODO: Implement createIterator() method.
//        return new ConcreteIterator($this);
    }

    public function count(){

        return count($this->items);
    }
    
    public function add($item){

        array_push($this->items,$item);
    }

    public function items(){
        return $this->items;
    }

}