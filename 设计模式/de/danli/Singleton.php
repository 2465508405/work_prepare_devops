<?php



class Singleton {

    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance(){

        if(static::$instance instanceof  static){
            echo 1;

            return static::$instance;
        }
        echo 2;
        static::$instance = new static;
        return new static;
    }

    public function getInfo(){

        print_r('单利模式');
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
        //单例模式
    }
}

$instance = Singleton::getInstance();

$instance->getInfo();

$instance = Singleton::getInstance();

$instance->getInfo();
$instance = Singleton::getInstance();

$instance->getInfo();