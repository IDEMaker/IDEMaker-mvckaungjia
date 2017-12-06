<?php
use LIB\models;
class Logincm extends models
{    //login登录逻辑业务处理
     public function login()
     {
            $post=post();

            $mysql=MySqlPDOD::GetObj();

            $data=$mysql->SelectOne("user","id,user,pwd","user=".$post['user']);
            $verify=Verify::getverifys();
            if($post['verifys']!=$verify)
            {
                   return 4;
            }
            if(empty($post['user']))
            {
                   return 0;

            }else if($data=="对不起没有数据"){

                   return 2;

            }else if($post['user']!=$data['user']){

                   return 2;

            }else if(md5($post['pwd'])!=$data['pwd'])
            {
                   return 3;

            }else if($post['user']==$data['user']&&md5($post['pwd'])==$data['pwd']){

                   unset($post['pwd']);
                   setCookies("login_home",$post);
                   return 1;
            }
     }
}