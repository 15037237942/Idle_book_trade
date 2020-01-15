<?php
 $path = $_SERVER['PHP_SELF'];
 $arr = explode('/',$path);
 $root = '/'.$arr[1];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>footer</title>
<!--		<link rel="stylesheet" href="public/css/index_1.css" />-->
		<link rel="stylesheet" href="<?php echo $root?>/home/public/css/foot.css" />
	</head>
	<body>  
		<div class="foot">
			<img src="<?php echo $root?>/home/public/img/导航背景.png" class="foot-bg" />			
			<div class="foot2">
			<nav>
				<ul>
					<li><a href="#">图书类别</a>  |</li>
					<li><a href="#">我的书库</a>  |</li>
					<li><a href="<?php echo $root?>/home/saleadd.php">发布旧书</a>  |</li>
					<li><a href="<?php echo $root?>/home/demo.html">每日推荐</a>  |</li>					
					<li><a href="<?php echo $root?>/home/person/index.php">个人中心</a>  |</li>
					<?php
						if($root != "admin")
						echo "<li><a href='../admin/index.php'>后台管理</a></li>"
					?>
				</ul>
			</nav>
			</div>
			<div class="foot1">
			<p>
				Copyright © 2020 WAN GUOYU. All rights reserved.
			</p>
			</div>
		</div>
	</body>
</html>



