<?php


include_once "./Action.php";
class Amativeness extends Action{


    public const ConstA = 33;
    public function getManConcluson(Man $concreteElementA)
    {
        // TODO: Implement getManConcluson() method.
        echo "男人恋爱时，凡事不懂也要装懂\n";
        echo $concreteElementA->getSalary();
    }

    public function getWomanConcluson(Woman $concreteElementB)
    {
        // TODO: Implement getWomanConcluson() method.

        echo "女人恋爱时，遇事懂也装不懂\n";
    }
}