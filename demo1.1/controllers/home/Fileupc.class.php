<?php
use common\My_controller;
use LIB\models;
class Fileupc extends My_controller
{      //文件上传首页
       public function index()
       {
              $this->SmDisplay("index",true,"Fileupc/upload");
       }
       //文件上传处理
       public function upload()
       {
               $models=new models();
               $status=$models->loadmodel();
               if($status)
               {
                   $this->alert("上传成功","Fileupc/index");
               }else{
                   $this->alert("上传失败","Fileupc/index");
               }
       }
       //文件展示列表
       public function upload_list()
       {
              $models=new models();

              $data=$models->loadmodel();

              $this->SmAssign("data",$data['data']);

              $this->SmAssign("page",$data['page']);

              if(empty(get("p")))
              {
                  $this->SmDisplay();
              }else{
                  $this->SmDisplay("upload_res");
              }

       }
}