<?php
include '../../../public/common/conn.php';
include '../../public/session.php';

$code=$_GET['code'];

$sql="select indent.price,indent.confirm,indent.num,book.id,book.name,book.img from indent,book where indent.book_id=book.id and indent.code='{$code}'";

$rst=mysqli_query($con,$sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类页面</title>
	<link rel="shortcut icon" href="../../../public/img/favicon.ico" />
	<link rel="stylesheet" href="../../public/css/index.css">
	
</head>
<body>

<div class="all">
	<div class="main">
		<?php
			include '../../header.php';
		?>
		<div class="nav"></div>
		<div class="content">
			<div class="floor">
				<div class="floorHeader">
					<div class="left">
						<span>个人中心:</span>
					</div>
				</div>

				<div class="floorFooter2">
					<div class='floorFooter2Left'>
						<ul>
							<li>个人信息</li>
                            <li><a href="../user/userlist.php">|--查看个人信息</a></li>
                            <li>联系方式</li>
                            <li><a href="../touch/touchlist.php">|--查看联系方式</a></li>
                            <li><a href="../touch/touchadd.php">|--添加联系方式</a></li>
                            <li>我的图书</li>
                            <li><a href="../book/salelist.php">|--查看出售图书</a></li>
                            <li><a href="<?php echo $root?>/home/saleadd.php">|--添加出售图书</a></li>
                            <li>我的订单</li>
                            <li><a href="myorder.php">|--查看我的订单</a></li>
                            <li><a href="gukeorder.php">|--查看客户订单</a></li>
							<li>&nbsp;</li>
							<li><a href='<?php echo $root?>/home/logout.php'>退出登录</a></li>
						</ul>
					</div>

					<div class='floorFooter2Right'>
						<form action="commentinsert.php" method='post'>
							<p>请发表评论:</p>
							<div id="editor"></div>
							<textarea id="txtarea" name="content" style="display:none;" class='PersonComment'></textarea>							
							<input type="hidden" name="book_id" value='<?php echo $_GET['book_id']?>'>
							<p>
								<input type="submit" value="提交" class='commit'>
							</p>
						</form>

					</div>
					<div class='clear'></div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php
		include '../../footer.php';
	?>
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../public/wangEditor-3.1.1/release/wangEditor.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor
        var editor = new E('#editor')
        var $text1 = $('#txtarea')
        editor.customConfig.onchange = function (html) {
            // 监控变化，同步更新到 textarea
            $text1.val(html)
        }
        editor.create()
        // 初始化 textarea 的值
        $text1.val(editor.txt.html())
    </script>
</body>
</html>