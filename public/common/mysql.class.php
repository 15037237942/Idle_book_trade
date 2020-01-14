<?php
//定义数据库类
class opmysql{
   private $host = '127.0.0.1';  //服务器地址
   private $name = 'root';       //登录账号
   private $pwd = '';            //登录密码
   private $dBase = 'qzl_idle_book_trade';      //数据库名称
   private $conn = '';           //数据库连接资源
   private $result = '';         //结果集
   private $msg = '';            //返回结果
   private $fields;              //返回字段
   private $fieldsNum = 0;       //返回字段数
   private $rowsNum = 0;         //返回结果数
   private $rowsRst = '';        //返回单条记录的字段数组
   private $filesArray = array();        //返回字段数组
   private $rowsArray = array();         //返回结果数组


   //构造函数
   function _construct($host='',$name='',$pwd='',$dBase=''){
       if($host!='')
          $this->host=$host;
       if($name!='')
          $this->name=$name;
       if($pwd!='')
          $this->pwd=$pwd;
       if($dBase!='')
          $this->dBase=$dBase;

       //调用init_conn()函数创建数据库连接源
       $this->init_conn();
   }

   //链接数据库
   function init_conn(){
      $this->conn = new mysqli($this->host,$this->name,$this->pwd);
       mysqli_select_db($this->conn,$this->dBase);
       mysqli_query($this->conn,"SET NAMES UTF8");
   }

   //查询函数
   function mysql_query_rst($sql){
       if($this->conn == ''){
          $this->init_conn();
       }
       $this->result = mysqli_query($this->conn,$sql);
   }

   //取得字段数
   	function getFieldsNum($sql){
   		$this->mysql_query_rst($this->conn,$sql);
   		$this->fieldsNum = mysqli_num_fields($this->result);
   	}

   	//获取对应的字段值
    function getFields($sql,$fields){
    	$this->mysql_query_rst($sql);
    	if(mysqli_errno($this->conn) == 0){
    		if(mysqli_num_rows($this->result) > 0){
    			$tmpfld = mysqli_fetch_row($this->result);
    			$this->fields = $tmpfld[$fields];

    		}
    		return $this->fields;
    	}else{
    		return '';
    	}
    }

   //返回查询记录数函数
   function getRowsNum($sql){
       $this->mysql_query_rst($sql);
       if(mysqli_errno($this->conn) == 0){
         return mysqli_num_rows($this->result);
       }else{
         return '';
       }
   }

   //取得单条记录数组函数
   function getRowsRst($sql){
       $this->mysql_query_rst($sql);
       if(mysql_errno() == 0){
         $this->rowsRst = mysql_fetch_array($this->result,MYSQL_ASSOC);
         return $this->rowsRst;
       }else{
         return '';
       }
   }

   //取得多条记录数组函数
   function getRowsArray($sql){
       $this->mysql_query_rst($sql);
       if(mysql_errno() == 0){
         while($row = mysql_fetch_array($this->result,MYSQL_ASSOC)){
            $this->rowsArray[] = $row;
         }
         return $this->rowsArray;
       }else{
         return '';
       }
   }

   //返回更新、删除、添加的记录数函数
   function uidRst($sql){
       if($this->conn == ''){
          $this->init_conn();
       }
       mysqli_query($this->conn,$sql);
       $this->rowsNum = mysqli_affected_rows($this->conn);
       if(mysqli_errno($this->conn) == 0){
          return $this->rowsNum;
       }else{
          return '';
       }
   }

   //错误信息
   	function msg_error(){
   		if(mysql_errno() != 0) {
   			$this->msg = mysqli_error($this->conn);
   		}
   		return $this->msg;
   	}

   //释放结果集函数
   function close_rst(){
       mysql_free_result($this->result);
       $this->msg = '';
       $this->fieldsNum = 0;
       $this->rowsNum = 0;
       $this->filesArray = '';
       $this->rowsArray = '';
   }

   //关闭数据库函数
   function close_conn(){
       $this->close_rst();
       mysql_close($this->conn);
       $this->conn = '';
   }
}

$conne = new opmysql();
?>