<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['code'])){
            
            if($_POST['code']=="201677I0332"){
                echo "<a href='./Idle_book_trade'>千纸林闲置书交易平台</a><hr><a href='./MessageBorad'>留言板系统</a>";
            }
        }else{
    ?>
    <form action="enter.php" method="post">
        <h1>Enter Code</h1>
        <input type="password" name="code" placeholder="联系电话：18638711907">
        <input type="submit" value="Enter">
    </form>
    <?php
        }
    ?>
</body>
</html>