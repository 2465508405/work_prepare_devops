<?php

include_once "./Composite.php";
include_once "./Leaf.php";

class Client{


    public function index(){
        $root = new Composite("root");
        $root->add(new Leaf("Leaf A"));
        $root->add(new Leaf("Leaf B"));

        $comp = new Composite("Composite x");
        $comp->add(new Leaf("Leaf XA"));
        $comp->add(new Leaf("Leaf XB"));
        $comp->add(new Leaf("Leaf XC"));
        $root->add($comp);
        $comp2 = new Composite("Composite X");
        $comp2->add(new Leaf("Leaf XA"));
        $comp2->add(new Leaf("Leaf XB"));
        $comp->add($comp2);

        $root->add(new Leaf("Leaf C"));
        $leaf = new Leaf("leaf D");
        $root->add($leaf);
        $root->add()

        $root->remove($leaf);
        $comp->remove($comp2);
//        print_r($root);
        $root->display(1);
    }
}

$cli = new Client();

$cli->index();