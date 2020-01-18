<?php
namespace MyProject;
 
echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"
?>
<!-- <?php
// $str = 'a\\b\n';   
// echo $str;
?> -->
<?php
    echo "aaa"."bbb";
?>
<hr/><hr/>
<?php
$a = 1;
{
    $a = 2;
}
echo $a, "\n";
?>
<hr/><hr/>
<?php
$i=1;
do
{
    
    echo "The number is " . $i . "<br>";
    $i++;
}
while ($i<=5);

?>
<?php
echo '这是第 " '  . __LINE__ . ' " 行';
?>
<br/><br/>
<?php
echo '该文件位于 " '  . __FILE__ . ' " ';
?>
<hr/>
<?php
echo '该文件位于 " '  . __DIR__ . ' " ';
?>
<hr/>

<hr/>
<?php
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
?>
<hr />
