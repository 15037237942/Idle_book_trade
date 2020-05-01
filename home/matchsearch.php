<?php
  session_start();
  include '../public/common/conn.php';

  error_reporting(0); 
  if(isset($_POST['search']) || isset($_GET['page']) ){
     if($_POST["name"]==""&&$_POST["writer"]==""&&$_POST["class_id"]=="" && !(isset($_GET['page'])) ){
         echo '<script>location="class.php"</script>';
     }{
    //$searchinfo = "name=".$_POST["name"]."&writer=".$_POST["writer"]."&class_id=".$_POST['class_id'];//搜索信息放入字符串，&连接符
    

    if(isset($_GET['page'])){
      $searchinfo = "name=".$_SESSION['search_name']."&writer=".$_SESSION['search_writer']."&class_id=".$_SESSION['search_class'];//搜索信息放入字符串，&连接符
    }else{
      $searchinfo = "name=".$_POST["name"]."&writer=".$_POST["writer"]."&class_id=".$_POST['class_id'];//搜索信息放入字符串，&连接符
      $_SESSION['search_name'] = $_POST["name"];
      $_SESSION['search_writer'] = $_POST["writer"];
      $_SESSION['search_class'] = $_POST["class_id"];
    }

    $key = explode('&',$searchinfo);//分割字符串，每项信息放入数组一个元素中

    $sqlBook_page = "select * from book";
    $f = 0;
    $where = "";

    //构建动态sql语句
    for($i=0; $i<count($key); $i++){
       $kv = explode('=',$key[$i]);
       if($kv[1] != ""){
          if($f == 0)
             $where = " where ";//只有一个搜索条件
          else
             $where.=" and "; //多个搜索条件通过and连接
          //连成最终的where条件
          $where.= $kv[0]." like '%". $kv[1] ."%'";
          $f++;
       }
    }

    //分页显示
    $pagesize = 6;
    $sqlBook_page = $sqlBook_page.$where;   //连成最终的sql语句
    $rstBook_page = mysqli_query($con,$sqlBook_page);

    //计算共有多少条记录
    $totalnum = mysqli_num_rows($rstBook_page);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
   <title>千纸林闲置书</title>
   <link rel="shortcut icon" href="../public/img/favicon.ico" />
	<link rel="stylesheet" href="public/css/index.css">
</head>
<body>
   <div class="all">
      <?php
         include 'header.php';
      ?>
      <?php			
			include 'high_search.php';
		?>
		<div class="nav"></div>
		<div class="content">

		<!--楼层开始-->
			<div class="floor">
				<div class="floorHeader">
					<div class="left">
						<span><a href="./class.php">返回</a>  &raquo; 搜索结果</span>
					</div>
				</div>

				<div class="floorFooter">

				   <?php
				   if($totalnum == 0){
                           echo "暂无相关图书";
                       }else{
                           //计算共有多少页
                           if($totalnum % $pagesize == 0){
                              $totalpage = (int)($totalnum/$pagesize);
                           }else{
                              $totalpage = (int)($totalnum/$pagesize)+1;
                           }

                           //接收当前页数，计算显示的起始记录
                           if(@$_GET['page']){
                              $page = $_GET['page'];
                              $start = ($page-1) * $pagesize;
                           }else{
                              $page = 1;
                              $start = 0;
                           }

                           $sqlBook = $sqlBook_page. "limit $start,$pagesize";
                           $rstBook = mysqli_query($con,$sqlBook);
                           while($rowBook=mysqli_fetch_assoc($rstBook)){
				   ?>
				    <!--楼层数据块开始-->
					<a href="book.php?book_id=<?php echo $rowBook['id']?>">
						<div class='shop'>
							<div class="shopImg">
								<img src="../public/uploads/thumb_<?php echo $rowBook['img']?>" style="height:200px">
							</div>
							<div class="nav"></div>
							<div class="shopInfo">
								<span class='shopName'><?php echo $rowBook['name']?></span>
								<span class='shopPrice'>￥<?php echo $rowBook['nowprice']?></span>
							</div>
						</div>
					</a>
                   <!--楼层数据块结束-->
                  <?php
                   	}
                  ?>
				</div>
			</div>
        <!--楼层结束-->
        <?php
            echo "<hr>";
            echo "<div style='text-align:center'>";
            echo "共有图书&nbsp;".$totalnum."&nbsp;种&nbsp;&nbsp;";
            echo "共".$totalpage."页&nbsp;&nbsp;当前是第".$page."页&nbsp;&nbsp;";
            if($page>=1 && $totalpage>1){
               echo "<a href=?page=1>第一页&nbsp;&nbsp;</a>";
            }
            if($page>1 && $totalpage>1){
               echo "<a href=?page=".($page-1).">上一页&nbsp;&nbsp;</a>";
            }
            if($page>=1 && $totalpage>$page){
               echo "<a href=?page=".($page+1).">下一页&nbsp;&nbsp;</a>";
            }
            if($page>=1 && $totalpage>1){
               echo "<a href=?page=".$totalpage.">尾页</a>";
            }
            echo "</div>";
          }         
         }
        }
        ?>
		</div>
      <div class="nav"></div>
      </div>
      </div>
   </div>
	<?php
		include 'footer.php';
	?>
</body>
</html>