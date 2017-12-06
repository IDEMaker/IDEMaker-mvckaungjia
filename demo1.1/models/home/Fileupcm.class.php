<?php
use LIB\models;
class Fileupcm extends models{
    //文件上传业务逻辑处理
     public function upload()
     {
            $upload=new UploadM();
            $data=$upload->Up("file");
            $mysql=MySqlPDOD::GetObj();
            if(count($data)==count($data,1))
            {
                  $status=$mysql->InsertOne("la",$da=["path_name"=>$data['path_name']]);
            }else{
                  $status=$mysql->InsertAll("la",$data);
            }
            return $status;
     }
     //文件上传数据查询展示
     public function upload_list()
     {
         return page("la","5",empty(get("p"))?1:get("p"),empty(get("search"))?1:get("search"));
     }
}