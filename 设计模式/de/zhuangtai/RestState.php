<?php


include_once "./State.php";
class RestState extends State {


    public function writeProgram(Work $w)
    {
        // TODO: Implement writeProgram() method.
        echo "当前时间：".$w->getHour()."下班回家\n";
    }
}