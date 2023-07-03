<?php

include_once './ConcreteIterator.php';
include_once './ConcreteAggregate.php';

class Client{

    public function index(){
        $agg = new ConcreteAggregate();
        $agg->add("a");
        $agg->add("b");
        $agg->add("c");
        $agg->add("d");
        $agg->add("e");
        $agg->add("f");
        $iterator = new ConcreteIterator($agg);
//        $isDone = $iterator
        while(!$iterator->isDone()){

            echo $iterator->currentItem()."\n";
            $iterator->next();
        }
    }
}

$cli = new Client();

$cli->index();