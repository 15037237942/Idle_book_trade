<?php
  include '../../public/common/conn.php';
  include '../public/session.php';

  $id = $_GET['id'];
  $sql = "select * from admin where id = {$id}";

  $rst = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($rst);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<form action="update.php" method='post'>
			<p>管理员名:</p>
			<p><input type="text" name='username' value='<?php echo $row['username']?>' disabled></p>

			<p>密码:</p>
			<p><input type="password" name='password'></p>

			<input type="hidden" name="id" value='<?php echo $row['id']?>'>

			<p><input type="submit" value="修改"></p>
		</form>
	</div>

</body>
</html>