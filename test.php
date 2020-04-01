<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 5                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2004 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Original Author <author@example.com>                        |
// |          Your Name <you@example.com>                                 |
// +----------------------------------------------------------------------+
//
// $Id:$

$uname = $_POST["uname"];
$pass = $_POST["upass"];
$link = mysqli_connect('localhost', 'root', '123456');
mysqli_set_charset($link, 'utf8');
$dbLink = mysqli_select_db($link, "courseCard");
$selectSQL1 = "select * from md_user where user_name ='$uname' and user_password='$pass'  and user_power<2 ";
$res1 = mysqli_query($link, $selectSQL1);
if (!$res1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
$num = mysqli_num_rows($res1);
$id = "";
$user_power = 1;
if ($num == 1) {
    while ($row = $res1->fetch_array()) {
        $id = $row['user_personid'];
        $user_power = $row['user_power'];
    }
    $name = "";
    echo isset($id) . "AAAAAAAAAAAAA";
    if ($id == null) {
        $name = $uname
    } else {
        $sql1 = "select name from md_teacher where teacher_id='$id'";
        $res2 = mysqli_query($link, $sql1);
        while ($row = $res2->fetch_array()) {
            $name = $row['name'];
        }
    }
    echo "<h1>登陆成功，" . $name . "欢迎您！</h1>";
    $_SESSION["name"] = $name;
    $_SESSION["power"] = $user_power;
    header("refresh:2;url=home.php");
} else {
    echo "<h1>用户名或密码错误
<br><br><br><br>
<a href='aindex.php'><input type='submit' value='重新登录' ></a></h1>";
}
$close = mysqli_close($link);
?>
