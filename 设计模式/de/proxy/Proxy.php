<?php

//include_once("./SchoolGirl.php");
include_once("./GiveGift.php");
include_once("./Pursuit.php");

class Proxy implements GiveGift{


    protected $pursuit;
    public function __construct(SchoolGirl $girl)
    {
        $this->pursuit = new Pursuit($girl);
    }

    public function GiveDolls()
    {
        // TODO: Implement GiveDolls() method.
        $this->pursuit->GiveDolls();

    }

    public function GiveFlowers()
    {
        // TODO: Implement GiveFlowers() method.
        $this->pursuit->GiveFlowers();
    }

    public function GiveChocolate()
    {
        // TODO: Implement GiveChocolate() method.
        $this->pursuit->GiveChocolate();
    }
}