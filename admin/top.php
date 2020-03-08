<?php
 $path = $_SERVER['PHP_SELF'];
 $arr = explode('/',$path);
 $root = '/'.$arr[1];
?>
<?php
  include 'public/session.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>top</title>
	<style>
		*{
			font-family: "仿宋";
		}
		body{
			background: #01afbe;
			color:#fff;
		}
		h1{
			margin-left: 50px;
		}
		.top-logo {
			float: left;
			margin-left: 100px;
		}
		.top-title {
			float: left;
		}
	</style>
</head>
<body>	
	<div>
		<div class="top-logo">
			<a href="<?php echo $root?>/admin/index.php" target="_top">
				<img src="<?php echo $root?>/home/public/img/logo.png" alt="首页"/>
			</a>
		</div>	
		<h1 class="top-title">千纸林闲置易书平台后台管理系统</h1>
	</div>
	
</body>
</html>