<?php
 include '../../public/common/conn.php';
 include '../public/session.php';

 $name = $_POST['name'];
 $id = $_POST['id'];

 $sql = "update class set name = '{$name}' where id = {$id}";

 if(mysqli_query($con,$sql)){
    echo '<script>location="index.php"</script>';
 }
?>