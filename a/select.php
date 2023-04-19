<!-- <?php
//include('conn.php');

// $chaxun="select * from dmzdb_tbl where id=$chaxun;";
$chaxun="select * from dmzdb_tbl;";
$lianjie=mysqli_query($conn1,$chaxun);

//var_dump($lianjie);

while($row=mysqli_fetch_assoc($lianjie)){     //mysqli_fetch_assoc 查询数据库结果并赋值为一行
    $user=$row['user'];
    $pass=$row['pass'];
    $phone=$row['phone'];
    echo "user:".$user."</br>"."pass:".$pass."</br>"."phone:".$phone."</br>";
    }
?> -->




<?php

include("conn.php");
include('session.php');


$chaxunsql=$_GET['chaxun'];

//增加一个判断，判断传入值是数字还是字符串

if(is_numeric($chaxunsql)){
    $chaxunsql="id=$chaxunsql";
}else{
    $chaxunsql="user='$chaxunsql'";
}

$chaxun="select * from dmzdb_tbl where $chaxunsql ;";     //select id,user 数据表头名
$reslust=mysqli_query($conn1,$chaxun);


//mysqli_fetch_assoc() 查询数据库结果并且赋值为一行
$row = mysqli_fetch_assoc($reslust);
$id = $row["id"];                //对应数据库表中数据表头名称
$username=$row["user"];
//提取row数字中的username字段
$html = "id:$id</br>username:$username</br>";

?>


<html>
<head>
<mate charset="utf-8">
    <h1>请输入你要查询的id或者账号名字</h1>
    <form action="#" method="get">
        <input type="text" name="chaxun">
        <input type="submit" >
    </form>
</head>
</html>
<?php echo $html;?>