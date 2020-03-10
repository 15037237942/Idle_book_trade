<?php
    echo date("Y-m-d");
    $uname = $_REQUEST["uname"];
    echo $uname;
    $sale = 3600;
    $result = decima($sale,2);
    echo $result;
?>

<?php
// 如果希望在函数内部修改参数值，且函数外部也能同时改变该参数的值，在传递的参数前面加 & 
   function  change(&$number){
       $number = $number * 2;
       echo  '函数内部  $number = ' . $number;
   }
   $number = 10;  //实参
   change($number);
   echo '<p>函数外部$number=' . $number . '</p>';
?>

<?php
    $list = [];
    $list= ["bid" => 103,  "title" => "西游记后转"];
    echo  $list['bid']."<br/>";
    echo  $list['title'];
?>

<table class="book-table">
                  <tr>
                    <td class="table-lable">名称:</td>
                    <td><input type="text" name="name" id="" class="input-text"></td>
                    
                    <td class="td-right table-lable">类别:</td>
                    <td>
                      <select name="class_id" class="input-select">
                        <?php
                          while($row=mysqli_fetch_assoc($rst)){
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";}
                        ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-lable">作者:</td>
                    <td><input type="text" name="writer" id="" class="input-text"></td>
                  </tr>
                  <tr>
                    <td class="table-lable">定价:</td>
                    <td><input type="text" name="oldprice" id="" class="input-text"></td>
                  </tr>
                  <tr>
                    <td class="table-lable">售价:</td>
                    <td><input type="text" name="nowprice" id="" class="input-text"></td>
                  </tr>
                  <tr>
                    <td class="table-lable">数量:</td>
                    <td><input type="text" name="stock" id="" class="input-text"></td>
                  </tr>
                  <tr>
                    <td class="table-lable">销量:</td>
                    <td><input type="text" name="sales" id="" class="input-text"></td>
                  </tr>
                  <tr>
                    <td class="table-lable">货架:</td>
                    <td>
                      <input type="radio" name="shelf" value='1' class="input-radio" checked> 上架
                      <input type="radio" name="shelf" value='0'> 下架
                    </td>
                  </tr>
                  <tr>
                    <td class="table-lable">封面:</td>
                    <td><input type="file" name="img"  class="input-file"></td>
                  </tr>
                  <tr>
                    <td class="table-lable">简介:</td>
                    <td><textarea name='info' cols="30" rows="5"  class="input-textarea"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="submit" value="发布" class="input-submit"></td>
                  </tr>
                </table>