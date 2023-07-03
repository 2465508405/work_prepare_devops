<?php

include_once "./State.php";
class SleepState extends State{


    public function writeProgram(Work $w)
    {
        // TODO: Implement writeProgram() method.

        echo "当前时间：".$w->getHour()."太困了，睡觉\n";
    }
}