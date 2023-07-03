<?php

include_once("./ConcreteObserver.php");
include_once("./ConcreteSubject.php");
class Client {


    public function index(){
        
        $subject = new ConcreteSubject();//通知者
        $observer = new ConcreteObserver($subject,"张三");
        $subject->attach($observer);//依赖倒转原则
        $subject->attach(new ConcreteObserver($subject,"李四"));
        $subject->setState(777);
        $subject->notify();
        $s = new ConcreteSubject();
        $s->attach(new ConcreteObserver($s, "x"));
        $s->attach(new ConcreteObserver($s, "y"));
        $z = new ConcreteObserver($s, "z");
        $s->attach($z);
        $s->detach($z);
        $s->setState('ABC');
        $s->breakfast();
//        $s->notify();
    }

}
$cli = new Client();

$cli->index();