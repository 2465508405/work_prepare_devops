<?php


class Failing extends Action{


    public function getManConcluson(Man $concreteElementA)
    {
        // TODO: Implement getManConcluson() method.
        echo "男人失败时，闷头喝酒，谁也别劝\n";
    }

    public function getWomanConcluson(Woman $concreteElementB)
    {
        // TODO: Implement getWomanConcluson() method.

        echo "女人失败时，眼泪汪汪，谁也劝不了\n";
    }
}