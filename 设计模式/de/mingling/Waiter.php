<?php

include_once("./BakeChichenWingCommand.php");
class Waiter{

    private $commands = [];

    public function setOrder(Command $command){

        if($command instanceof BakeChichenWingCommand){

            echo "服务员： 鸡翅没有了， 请点别的烧烤\n";
        }else{

            echo "增加订单\n";
            array_push($this->commands, $command);
        }
    }

    public function cancelOrder(Command $command){

    }

    public function notify(){
        foreach ($this->commands as $value) {
            $value->excuteCommand();
        }
    }
}