<?php
   include '../../../public/common/conn.php';
   include '../../public/session.php';

   $code = $_GET['code'];
   $sql = "delete from indent where code = '{$code}'";

   if(mysqli_query($con,$sql)){
      echo '<script>location="gukeorder.php"</script>';
   }
?>