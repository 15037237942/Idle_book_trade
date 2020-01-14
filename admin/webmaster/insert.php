<?php
include '../../public/common/conn.php';
include '../public/session.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "insert into admin(username,password) values('{$username}','{$password}')";

if(mysqli_query($con,$sql)){
   echo '<script>location="index.php"</script>';
}
?>