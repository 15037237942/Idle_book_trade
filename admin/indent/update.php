<?php 
include '../../public/common/conn.php';
include '../public/session.php';

$code=$_POST['code'];
$status_id=$_POST['status_id'];
$paytype=$_POST['paytype'];
$posttype=$_POST['posttype'];

$sql="update indent set status_id={$status_id},paytype={$paytype},posttype={$posttype} where code='{$code}'";

if(mysqli_query($con,$sql)){
	echo '<script>location="index.php"</script>';
}
?>