<?php
    session_start();
	include '../public/common/conn.php';
?>
<!doctype html>
<html lang="en">
	
<head>
	<meta charset="UTF-8">
	<title>千纸林闲置书交易平台-首页</title>
	<link rel="shortcut icon" href="../public/img/favicon.ico" />
	<!-- <link rel="stylesheet" href="public/css/index.css"> -->
	<!-- <link rel="stylesheet" href="public/css/animate.min.css"> 
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 -->

	 <script src="public/js/jquery.min.js"></script>
	<link rel="stylesheet" href="public/css/index_style.css" />

	<!--start slider -->
    <link rel="stylesheet" href="public/css/fwslider.css" media="all">
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/css3-mediaqueries.js"></script>
    <script src="public/js/fwslider.js"></script>

	<link rel="stylesheet" href="public/css/index_self.css" />



	
</head>
<body>
	<!-- start homehead -->
	<?php 
		include 'homeheader.php';
	?>
  	<!-- start slider -->
  	<div id="fwslider">
        <div class="slider_container">

            <div class="slide"> 
                <!-- Slide image -->
                    <img src="public/img/banner3-3.png" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">闲置书</h4>
                        <p class="description">千纸林闲置易书</p>
                    </div>
                </div> 
                 <!-- /Texts container -->
			</div>
			
            <div class="slide">
                <img src="public/img/banner2-2.png" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">便捷 </h4>
                        <p class="description">交易您所有</p>
                    </div>
                </div>
			</div>
			
			<div class="slide">
                <img src="public/img/banner1-1.png" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">如愿 </h4>
                        <p class="description">寻找您所愿</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->

	<!-- start main -->
	<div class="main">
		<div class="wrap">
			<div class="featured-first">
				<div class="featured-first-head">
						<h2 class="featured-first-title"> 好书推荐 </h2>
						<a href="./class.php"><h2 class="featured-first-right">  更多</h2></a>
						<div class="clear"></div>
						<hr/>
				</div>
				
				<?php
					$sqlBook1 = "select * from book where recommend=1 and shelf=1 order by id desc limit 0,12";
					$rstBook1 = mysqli_query($con,$sqlBook1);				   
					if(!$rstBook1){
						exit();
					}else {					 
						while($tuijie = mysqli_fetch_array($rstBook1)){
				?>
				<div class="recommend">
					<a href="book.php?book_id=<?php echo $tuijie['id']?>">
						<div class="recommend-content">
							<div class="animated rollIn">
								<div class="tuijian-book">
									<div class="tuijian-book-img">
										<img src="../public/uploads/thumb_<?php echo $tuijie['img']?>" alt="">
									</div>
									<div class="tuijian-book-content">
										<span class="tuijian-book-title">书名：</span>
										<span class="tuijian-book-title tuijian-detail tuijian-book-name"><?php echo $tuijie['name']?></span><br/>										
										<span class="tuijian-book-title">作者：</span>
										<span class="tuijian-book-title tuijian-detail tuijian-book-author"><?php echo $tuijie['writer']?></span><br/>
										<p><span class="tuijian-book-title">简介：</span>
										<i class="tuijian-book-title tuijian-detail tuijian-book-introduce"><?php echo $tuijie['info']?></i></p>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>	
				<?php
					}	}
				?>
			</div>
		</div>
	</div>

	<!-- start foot -->
	<?php 	   
		include 'footer.php';
	?>
</body>
</html>