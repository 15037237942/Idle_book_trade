<?php
include '../../public/common/conn.php';
include '../public/session.php';

$name = $_POST['name'];

$sql = "insert into class(name) values('{$name}')";

if(mysqli_query($con,$sql)){
   echo '<script>location="index.php"</script>';
}
?>