<?php
  include 'public/session.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>千纸林易书后台管理系统</title>
	<link rel="shortcut icon" href="../public/img/favicon.ico" />
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		html,body {
			height:100%;
			width:100%;
			margin: 0px;
			padding: 0px;
		}
		.main {
			min-width:1000px;
		}
		.foot {
			margin: 0px;
			padding: 0px;
			overflow:hidden;
		}
	</style>
</head>
	<frameset rows='100px,*,76px' frameborder='no' border="1" class="main">
		<frame src='top.php' name='top'> <!--有15%的高度-->
		<frameset cols='15%,70%' frameborder='no' border="1">
			<frame src='left.php' name='left'><!--有15%的宽度-->
			<frame src='right.php' name='right'><!--有85%的宽度-->
		</frameset>
		<frame src='bottom.php' name='foot' class="foot">
	</frameset>
</html>