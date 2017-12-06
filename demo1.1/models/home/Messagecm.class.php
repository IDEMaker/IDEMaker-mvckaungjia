<?php
use LIB\models;
class Messagecm extends models
{  //信息注册添加逻辑处理
    public function message_add()
    {
           $post=post();
           $mysql=MySqlD::GetObj();
           $post['pwd']=md5($post['pwd']);
           return $mysql->InsertOne("user",$post);
    }
    //信息展示数据逻辑处理
    public function message_list()
    {      $search=empty(get("search"))?"":get("search");
           if(empty($search)){
               $where=1;
           }else{
               $where="user like '%$search%' or email like '%$search%'";
           }
           return page("user","10",empty(get("p"))?1:get("p"),$where);
    }
    //信息修改查询业务处理
    public function message_updatesel()
    {
           $id=get("id");
           $mysql=MySqlD::GetObj();
           return $mysql->SelectOne("user","id,user,email","id=".$id);
    }
    //信息修改逻辑处理
    public function message_update()
    {
           $post=post();
           $id=$post['id'];
           $mysql=MySqlD::GetObj();
           $post['pwd']=md5($post['pwd']);
           return $mysql->Update("user",$post,"id=".$id);
    }
    //信息删除逻辑处理
    public function message_delete()
    {
           $id=get("id");
           $mysql=MySqlD::GetObj();
           return $mysql->DeleteOne("user","id=".$id);
    }
}