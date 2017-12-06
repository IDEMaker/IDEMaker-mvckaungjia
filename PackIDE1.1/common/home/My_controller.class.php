<?php
namespace common;
use LIB\controller;
class My_controller extends controller{
    //公共控制器进行防非法登录
    public function __construct()
    {
        parent::__construct();
        if(empty(getCookies("login_home")))
        {
              $this->alert("请先登录","Loginc/index");
        }
    }
}