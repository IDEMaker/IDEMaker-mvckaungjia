<?php
class MySqliDX extends Rule{
     //定义私有的连接数据库属性  类型 array
     private $root=array();
     //mysqli面向对象格式
     private $link;
     //定义私有的对象类型

     private static $object;
 
     //私有构造方法 当实例化时自动加载 
    private function __construct($root=array()){

        $root=require_once APP_PCOFDP."/database.php";
        if(!empty($root))
        {
            $this->root=$root;
        }

           $this->link=new mysqli($this->root['Host'].":".$this->root['Port'],$this->root['HostName'],$this->root['HostPwd'],$this->root['DbName']);

           $this->link->set_charset($this->root['Charset']);
     }
     //私有克隆方法
     private  function __clone(){}

     //公共单例模式 公共 出口
     public static function GetObj()
     {
           if(self::$object instanceof self)
           {
                return self::$object;
           }else{
                self::$object=new self;

                return self::$object;
           }
     }
      //析构方法 当页面加载完毕时 
     public function __destruct()
     {
          $this->link->close();
     }
     //查询单条数据 方法 

     //$data=$OBJ->SelectOne("test");

     //$data=$OBJ->SelectOne("test","actile");

     //return array
     public function SelectOne($table,$column="*",$where="1",$limit="1")
     {       //预处理sql注入
             $where=PRESql($where);
             
             $Sql="SELECT {$column} FROM  {$table} WHERE {$where}  LIMIT {$limit}";
                
             $Result=$this->link->query($Sql);

             if(empty($Result->num_rows))
             {
                 $data="对不起没有数据";
             }else{
                 $data=$Result->fetch_assoc();
             }
              return $data;
     }
     //查询多条数据 方法

     //$data=$OBJ->SelectAll("test");

     //$data=$OBJ->SelectAll("test","actile");

     //$data=$OBJ->SelectAll("test","*","1","20");

     //return array
     public function SelectAll($table,$column="*",$where="1",$limit="10")
     {        //预处理sql注入
              $where=PRESql($where);
      
              $Sql="SELECT {$column} FROM  {$table} WHERE {$where}  LIMIT {$limit}";

              $Result=$this->link->query($Sql);

              while($Arr=$Result->fetch_assoc())
              {
                    $data[]=$Arr;
              }

              if(empty($data))
              {
                  $data="对不起没有数据";
              }

              return $data;

     }
    //添加单条数据 方法 $data 类型 array() 一维数组

    //$data=$OBJ->InsertOne("test",$arr=['acticle'=>"曹禺"]);

    //return int 自增id 
     public  function InsertOne($table,$data)
     {       //预处理Xss攻击
             $data=PREXss($data);

             $keys=implode(array_keys($data),"`,`");

             $values=implode(array_values($data),"','");
             
             $Sql="INSERT INTO {$table} (`".$keys."`) VALUES('".$values."')";
          
             $this->link->query($Sql);

             return $this->link->insert_id;
     }
     //添加多条数据 方法 $data 类型 array() 二维数组

     //$data=$OBJ->InsertAll("test",$arr=[['acticle'=>"哈"],["acticle"=>"哈"],["acticle"=>"哈"]]);

     //return int 自增id
     public function InsertAll($table,$data)
     {        //预处理Xss攻击
             $data=PREXss($data);

             foreach ($data as $key => $value)
             {
  
                  $keys[]=implode(array_keys($value),"`,`");


                  $values[]=implode(array_values($value),"','");

             }
                     
             $keys=array_unique($keys);

             $values=implode($values,"'),('");
             
             $Sql="INSERT INTO {$table} (`".$keys[0]."`)  VALUES('".$values."')";

             $this->link->query($Sql);

             return $this->link->insert_id;
     }
     //删除单条数据 方法 

     //$data=$OBJ->DeleteOne("test","id=1");

     //return bool  true false  1  0
     public function DeleteOne($table,$where)
     {      //预处理sql注入
            $where=PRESql($where);

            $Sql="DELETE FROM {$table} WHERE {$where}";
          
            return $this->link->query($Sql);
     }
     //删除多条数据 方法  $data 类型 array() 一维数组

     //$data=$OBJ->DeleteAll("test",$arr=['id',"=","45"]);

     //$data=$OBJ->DeleteAll("test",$arr=['id',">","10"]);

     //$data=$OBJ->DeleteAll("test",$arr=['id',"<","10"]);

     //$data=$OBJ->DeleteAll("test",$arr=['1',"6","10"],"id");

     //return bool true false 1  0 
     public function DeleteAll($table,$data,$id=null)
     {
            if(is_numeric($data[1]))
            {
                  $data=$id." IN"."(".join(",",$data).")"; 
                
            }else{

                  $data=join(" ",$data);
            }

            $Sql="DELETE FROM {$table} WHERE {$data}";
             
            return $this->link->query($Sql);
     }
     //修改数据 方法 $data 类型 array() 一维数组

     //$data=$OBJ->Update("test",$arr=['acticle'=>"哈"],"id=47"); 

     //return bool true false 1  0 
     public  function Update($table,$data,$where)
     {       //预处理sql注入
             $where=PRESql($where);

         if(count($data)>1)
         {
             $keys=array_keys($data);
             $values=array_values($data);
             $value="";
             foreach($keys as $key=>$val)
             {
                 $value.="`".$val."`='".$values[$key]."',";
             }
             $values=rtrim($value,",");

             $Sql="UPDATE {$table}  SET $values WHERE {$where}";
         }else{

             $keys=implode(array_keys($data),"`,`");


             $values=implode(array_values($data),"','");

             $Sql="UPDATE {$table}  SET `".$keys."`='".$values."' WHERE {$where}";
         }
         
             return $this->link->query($Sql);
     }
    //分页数据调取
    function pageData($table,$page_num,$p=1,$where=1){
        $where=PRESql($where);
        $limit=($p-1)*$page_num;
        $Sql="SELECT * FROM {$table} WHERE {$where} limit {$limit},{$page_num}";
        $res=$this->link->query($Sql);
        //获取结果集中的记录条数
        $num=mysqli_fetch_row($res);
        if($num>0){
            while($arr=mysqli_fetch_assoc($res)){
                $data[]=$arr;
            }
            return $data;
        }else{
            return "";
        }
    }
    //总条数调取
    function count($table,$where=1){
        $where=PRESql($where);
        $Sql="SELECT COUNT(*) as num FROM `$table` WHERE $where";
        $res=$this->link->query($Sql);
        $arr=mysqli_fetch_assoc($res);
        return $arr['num'];
    }
}

?>