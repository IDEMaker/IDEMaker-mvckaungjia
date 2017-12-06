<?php
use LIB\controller;
use LIB\models;
class Loginc extends controller
{   //login登录首页
    public function index()
    {
          $this->SmDisplay("index",true,"Loginc/login");
    }
    public function verifys()
    {
           return Verify::verifys();
    }
    //login登录处理
    public function login()
    {
            $model=new models();
            $status=$model->loadmodel();
            switch($status)
            {
                case 0:$this->alert("用户名不能为空","Loginc/index");break;
                case 1:$this->alert("登录成功","Indexc/index");break;
                case 2:$this->alert("用户名不正确","Loginc/index");break;
                case 3:$this->alert("密码不正确","Loginc/index");break;
                case 4:$this->alert("验证码不正确","Loginc/index");break;
            }
    }
}