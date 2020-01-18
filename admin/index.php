<?php
include 'public/session.php';
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="shortcut icon" href="../public/img/favicon.ico" />
	<style>
		* {
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>
<frameset rows='15%,65%,25%' frameborder='no' border="1">
	<frame src='top.php' name='top'>
		<!--有15%的高度-->
		<frameset cols='15%,70%' frameborder='no' border="1">
			<frame src='left.php' name='left'>
				<!--有15%的宽度-->
				<frame src='right.php' name='right'>
					<!--有85%的宽度-->
		</frameset>
		<frame src='../home/footer.php' name='foot'>
</frameset>

</html>