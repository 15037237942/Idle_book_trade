<?php
  include '../public/common/conn.php';
  include '../public/common/mysql.class.php';
  header('Content-Type:text/html;charset=UTF-8');

  $reback = '0';                  //定义初始变量
  $sql = "insert into user(username,password,realname,img)
           values('".trim($_GET['username'])."','".md5(trim($_GET['pwd']))."','".trim($_GET['realname'])."','default_avatar.jpg')";
  //执行添加语句，返回影响行数

  $num = $conne->uidRst($sql);
    if($num == 1){
       $reback ='1';
    }
    echo $reback;   //输出变量值
?>thumb_default_avatar.jpg