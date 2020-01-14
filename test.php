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