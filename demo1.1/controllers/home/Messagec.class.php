<?php
use common\My_controller;
use LIB\models;
class Messagec extends My_controller
{        //信息注册首页
         public function index()
         {
               $this->SmDisplay("index",true,"Messagec/message_add");
         }
         //信息注册添加
         public function message_add()
         {
               $models=new models();
               $status=$models->loadmodel();
               if($status)
               {
                     $this->alert("注册成功","Messagec/index");
               }else{
                     $this->alert("注册失败","Messagec/index");
               }
         }
         public function message_list()
         {
                $models=new models();

                $data=$models->loadmodel();

                 $this->SmAssign("data",$data['data']);

                 $this->SmAssign("page",$data['page']);

                 if(empty(get("p")))
                 {
                     $this->SmDisplay();
                 }else{
                     $this->SmDisplay("message_res");
                 }
         }
         //信息修改查询
         public function message_updatesel()
         {
                 $models=new models();
                 $data=$models->loadmodel();
                 $this->SmAssign("data",$data);
                 $this->SmDisplay("message_updatesel",true,"Messagec/message_update");
         }
         //信息修改
         public function message_update()
         {
                $models=new models();
                $status=$models->loadmodel();
                if($status)
                {
                     $this->alert("修改成功","Messagec/message_list");
                }else{
                     $this->alert("修改失败","Messagec/message_list");
                }
         }
         //信息删除
         public function message_delete()
         {
                 $models=new models();
                 $status=$models->loadmodel();
                 if($status)
                 {
                     $this->alert("删除成功","Messagec/message_list");
                 }else{
                     $this->alert("删除失败","Messagec/message_list");
                 }
         }

}