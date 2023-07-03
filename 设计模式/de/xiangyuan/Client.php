<?php

include_once "./WebSiteFactory.php";
include_once "./User.php";
class Client {

        public function index(){

            $f = new WebSiteFactory();
            $fx = $f->getWebSiteGategory("产品展示");
            $fx->using(new User("张三"));
            $fy = $f->getWebSiteGategory("产品展示");
            $fy->using(new User("李四"));
            $fz = $f->getWebSiteGategory("产品展示");
            $fz->using(new User("王五"));
            $fl = $f->getWebSiteGategory('博客');
            $fl->using(new User('李伟'));
            $fm = $f->getWebSiteGategory('博客');
            $fm->using(new User('王秀英'));
            $fn = $f->getWebSiteGategory('博客');
            $fn->using(new User('李秀英'));
            $f->getWebSiteCount();
        }
}

$cli = new Client();

$cli->index();