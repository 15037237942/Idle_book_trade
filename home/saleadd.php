<?php
  include '../public/common/conn.php';
  include 'public/session.php';

  $sql="select * from class";
  $rst=mysqli_query($con,$sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>发布旧书</title>
  <link rel="shortcut icon" href="../public/img/favicon.ico" />
  <link rel="stylesheet" href="public/css/index_style.css" />
	<link rel="stylesheet" href="public/css/publish.css">
	<link rel="stylesheet" href="public/css/animate.min.css">
</head>
<body>
		<?php
			include 'header.php';
    ?>
    <div class="main" style="margin-bottom:-28px">
      <div class="wrap">
        <div id="fabu" class="animated bounceInRight">
          <div class="cut-line"></div>
          <form action="<?php echo $root?>/home/person/book/insert.php" method='post' enctype='multipart/form-data'>
              <fieldset>
                <legend>闲置书籍信息</legend>
                <table class="book-table">
                  <tr>
                    <td class="table-lable">名称:</td>
                    <td><input type="text" required name="name" id="" class="input-text"><span class="require">*</span></td>
                    
                    <td class="td-right table-lable">类别:</td>
                    <td>
                      <select name="class_id" class="input-select">
                        <option value="11"></option>
                        <?php
                          while($row=mysqli_fetch_assoc($rst)){
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";}
                        ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-lable">作者:</td>
                    <td><input type="text" required name="writer" id="" class="input-text"><span class="require">*</span></td>

                    <td class="td-right table-lable">货架:</td>
                    <td>
                      <input type="radio" name="shelf" value='1' class="input-radio" checked> 上架
                      <input type="radio" name="shelf" value='0' class="input-radio"> 下架
                    </td>
                  </tr>
                  <tr>
                    <td class="table-lable">定价:</td>
                    <td><input type="text" pattern="[0-9]+[.]?[0-9]+" required name="oldprice" class="input-text"><span class="require">*</span></td>
                      
                    <td class="td-right table-lable">封面:</td>
                    <td class="file-box"><input type="file" required name="img"  class="input-file"></td>
                  </tr>
                  <tr>
                    <td class="table-lable">售价:</td>
                    <td><input type="text" pattern="[0-9]+[.]?[0-9]+" required name="nowprice" class="input-text"><span class="require">*</span></td>

                    <td class="table-lable">地址:</td>
                    <td><input type="text" name="book_address" class="input-text"></td>                            
                  </tr>
                  <tr>
                    <td class="table-lable">数量:</td>
                    <td><input type="text" value="1" name="stock" class="input-text"></td>  

                    <td rowspan="2" class="td-right table-lable">简介:</td>
                    <td rowspan="2" class="text-info"><textarea name='info' class="input-textarea" cols="25" rows="4"></textarea></td>               
                  </tr> 
                  <tr>
                    <td class="td-right table-lable">销量:</td>
                    <td><input type="text" value="1" name="sales" id="" class="input-text"></td>
                  </tr>
                  <tr>
                    <td colspan="4"><input type="submit" value="发布" class="input-submit"></td>
                  </tr>
                </table>
              </fieldset>              
          </form>
        </div>
      </div>
    </div>
    <?php
			include 'footer.php';
		?>
    
</body>
</html>