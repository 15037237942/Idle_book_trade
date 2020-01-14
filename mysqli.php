<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
     
    // 创建连接
    $conn = mysqli_connect($servername, $username, $password); /************** mysqli_connect($servername, $username, $password)       */
    // 检测连接
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
     
    // 创建数据库
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn, $sql)) { /**************           mysqli_query($conn, $sql)             */
        echo "数据库创建成功";
    } else {
        echo "Error creating database: " . mysqli_error($conn);    /*            mysqli_error($conn);       */
    }

    // 多条sql语句传入
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')";
    
    if (mysqli_multi_query($conn, $sql)) {        /*      mysqli_multi_query($conn, $sql)           */
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql = "INSERT INTO MyGuests(firstname, lastname, email)  VALUES(?, ?, ?)";
 
    // 为 mysqli_stmt_prepare() 初始化 statement 对象
    $stmt = mysqli_stmt_init($conn);
 
    //预处理语句
    if (mysqli_stmt_prepare($stmt, $sql)) {  /**  mysqli_stmt_prepare($stmt, $sql)   */
        // 绑定参数
        mysqli_stmt_bind_param($stmt, 'sss', $firstname, $lastname, $email);   
        /*
            该函数绑定参数查询并将参数传递给数据库。第二个参数是 "sss" 。以下列表展示了参数的类型。 s 字符告诉 mysql 参数是字符串。
            可以是以下四种参数:i - 整数     d - 双精度浮点数        s - 字符串      b - 布尔值
        */
 
        // 设置参数并执行
        $firstname = 'John';
        $lastname = 'Doe';
        $email = 'john@example.com';
        mysqli_stmt_execute($stmt);
 
        $firstname = 'Mary';
        $lastname = 'Moe';
        $email = 'mary@example.com';
        mysqli_stmt_execute($stmt);
 
        $firstname = 'Julie';
        $lastname = 'Dooley';
        $email = 'julie@example.com';
        mysqli_stmt_execute($stmt);
    }

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {                 /**  mysqli_num_rows($result) */
        // 输出数据
        while($row = mysqli_fetch_assoc($result)) {  /**mysqli_fetch_assoc($result) */
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 结果";
    }
     
    mysqli_close($conn);             /**************           mysqli_close($conn);             */

?>