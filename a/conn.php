<head>
<meta charset=utf-8>
</head>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "dmzdb";



// 创建数据库连接
$conn = mysqli_connect($servername, $username, $password);

// 检测连接
if (!$conn) {
    die("连接失败: <br>" . mysqli_connect_error());
}else{
    //echo "连接成功<br>";
}



// 创建数据库
$sql = "create DATABASE ".$dbname;
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功<br>";
} else {
    //echo "Error creating database: " . mysqli_error($conn);
}


// 创建数据库表的连接
$conn1 = mysqli_connect($servername, $username, $password,$dbname);

$sqlcreatetbl = "CREATE TABLE IF NOT EXISTS `dmzdb_tbl`(
    `id` INT UNSIGNED AUTO_INCREMENT,
    `user` VARCHAR(10) NOT NULL,
    `pass` VARCHAR(10) NOT NULL,
    `phone` VARCHAR(11) NOT NULL,
    `file` VARCHAR(30),
    PRIMARY KEY ( `id` )
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    
    if (mysqli_query($conn1, $sqlcreatetbl)) {
    //echo "数据表连接成功<br>";
    } else {
    //echo "创建数据表错误: " . mysqli_error($conn1);
    }
    


mysqli_close($conn);
?>
