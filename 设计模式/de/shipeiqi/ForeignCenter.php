<?php


class ForeignCenter{

    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function jingong(){

        echo "外籍中锋".$this->name."进攻\n";
    }

    public function fangshou(){

        echo "外籍中锋".$this->name."防守\n";
    }
}