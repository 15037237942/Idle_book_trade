<?php
  include '../public/common/conn.php';

  $sql="select * from class";
  $rst=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" /> 
		<link rel="shortcut icon" href="../public/img/favicon.ico" />
		<link rel="stylesheet" href="public/css/high_search.css" />
		<title></title>
	</head>
	<body>
		<div id="search">				
			<form action="matchsearch.php" method="post">
			    <input placeholder="请输入书籍名称" type="text" name="name" class="search_text">
				<input placeholder="请输入作者名" type="text" name="writer" class="search_text">
				<select name="class_id" class="search_text">
				  <option value="">所有类</option>
                  <?php
                    while($row=mysqli_fetch_assoc($rst)){
                      echo "<option value='{$row['id']}'>{$row['name']}</option>";}
                  ?>
                </select>
				<input name="search" type="submit" value="高级检索" class="btn-search"/>
			</form>			
		</div>
	</body>
	
	
	
</html>