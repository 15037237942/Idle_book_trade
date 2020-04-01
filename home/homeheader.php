<?php
//当前php文件相对于网站根目录的位置地址  Idle_book_trade/home/index.php
 $path = $_SERVER['PHP_SELF']; 
 $arr = explode('/',$path);
 $root = '/'.$arr[1];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />		

		<link rel="stylesheet" href="<?php echo $root?>/home/public/css/index_style.css" />

		<link href="<?php echo $root?>/home/public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo $root?>/home/public/js/megamenu.js"></script>

		<link rel="stylesheet" href="<?php echo $root?>/home/public/css/index_self.css" />
	</head>
	<body>
		<div id="head">			
			<div class="header-top">
				<div class="wrap"> 
					<div class="cssmenu">
						<ul>
							<?php
							if(!@$_SESSION['home_userid']){
							echo "<li><a href='{$root}/home/login.php'>登录</a></li> |
									<li><a href='{$root}/home/register.php'>注册</a></li>";
							}else{
							echo "<li><a href='{$root}/home/person/index.php'>
							<img src='../public/upusers/{$_SESSION['home_img']}' class='head-icon'/>
							欢迎{$_SESSION['home_username']}登录</a></li> |
							<li><a href='{$root}/home/logout.php'>退出</a></li>";
							}
							?>							
							| <li class="head-date"><?php echo date("Y-m-d") ?></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>		
			
			<div id="header-bottom">
				<div class="wrap">
					<div class="header-bottom-left">
						<div class="logo">
							<a  class="logo-ref" href="index.php">
								<img src="<?php echo $root?>/home/public/img/logo-green.png" class="logo-img" alt="logo-green"/>
								<h1 class="logo-title">千纸林闲置书交易平台</h1>
							</a>
						</div>
					</div>
					<div class="clear"></div>	
				</div>				
			</div>
			<!-- <hr/> -->
			<div id="header-bottom">
				<div class="wrap">
					<div class="header-bottom-left">
						<div class="menu">
							<ul class="megamenu skyblue">
								<li class="active grid">
									<a href="<?php echo $root?>/home/index.php"  class="1">
										首页
									</a>
								</li>
								<li>
									<a href="<?php echo $root?>/home/class.php" class="2">
										图书类别
									</a>
								</li>
								<li>
									<a href="<?php echo $root?>/home/bookshelf/index.php"  class="3" >
										我的书库
									</a>
								</li>
								<li>
									<a href="<?php echo $root?>/home/saleadd.php" class="4" >
										发布图书
									</a>
								</li>
								<li>
									<a href="<?php echo $root?>/home/demo.php" class="5" >
										每日推荐
									</a>
								</li>
								<li>
									<a href="<?php echo $root?>/home/cart/index.php" class="6" >
										购物车
									</a>
								</li>
								<li>
									<a href="<?php echo $root?>/home/person/index.php"  class="7">
										个人中心
									</a>
								</li>								
							</ul>	
						</div>
					</div>
					<div class="header-bottom-right">
						<div class="search">						
							<form action="hotsearch.php" method="post">
							<input value="请输入图书关键字" name="keyword" type="text"
								onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入图书关键字';}"
							/>
							<input name="ok" type="submit" value="" class="sbtn"/>
							</form> 
							<div id="response"> </div>
						</div>
					</div>	
					<div class="clear"></div>	
				</div>						
			</div>			
		</div>
	</body>
</html>
