<?php
   include '../../public/common/conn.php';
   include '../public/session.php';

   $book_id = $_GET['id'];
   $sql = "delete from bookshelf where book_id = {$book_id}";

   if(mysqli_query($con,$sql)){
      echo '<script>location="index.php"</script>';
   }
?>