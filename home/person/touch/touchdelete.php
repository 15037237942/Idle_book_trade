<?php
include '../../../public/common/conn.php';
include '../../public/session.php';

$id = $_GET['id'];

$sql = "delete from touch where id = {$id}";

if(mysqli_query($con,$sql)){
  echo "<script>location='touchlist.php'</script>";
}
?>