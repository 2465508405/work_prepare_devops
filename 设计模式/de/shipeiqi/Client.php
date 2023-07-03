<?php

include_once "./Translator.php";
include_once "./Forwards.php";
class Client {
//例子不太好，参照：https://www.runoob.com/design-pattern/adapter-pattern.html

    public function index(){
        $trans = new Translator("张三");
        $trans->attack();
        $trans->defense();
        $forward = new Forwards("李四");
        $forward->attack();
        $forward->defense();
    }
}

$cli = new Client();
$cli->index();