<?php


class Pursuit implements GiveGift{

    protected $girl;
    public function __construct(SchoolGirl $girl)
    {
        $this->girl = $girl;
    }

    public function GiveDolls()
    {
        // TODO: Implement GiveDolls() method.
        echo $this->girl->getName()."送你娃娃\n";
    }

    public function GiveFlowers()
    {
        // TODO: Implement GiveFlowers() method.
        echo $this->girl->getName()."送你花\n";
    }

    public function GiveChocolate()
    {
        // TODO: Implement GiveChocolate() method.
        echo $this->girl->getName()."送你巧克力\n";
    }
}