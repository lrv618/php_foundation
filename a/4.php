<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include('session.php');

$name=htmlspecialchars($_REQUEST['name']);
$email=htmlspecialchars($_REQUEST['email']);
$aihao=$_REQUEST['aihao'];
$beizhu=htmlspecialchars($_REQUEST['beizhu']);
$xingbie=htmlspecialchars($_REQUEST['xingbie']);

echo "名字为：".$name."</br>";
echo "邮箱为：".$email."</br>";

echo "爱好为：";
if($aihao!=""){
    foreach($aihao as $ah){
    echo htmlspecialchars($ah)." ";}
    }else{
    echo "没有爱好";
    }

echo "</br>备注为：".$beizhu."</br>";

echo "性别为：".$xingbie."</br>";
?>


<form action="" method="post">
名字：
<input type="text" name="name" > <br>

邮件：
<input type="text" name="email" ><br>

爱好：
<input type="checkbox" name="aihao[]" value="足球" >足球
<input type="checkbox" name="aihao[]" value="篮球">篮球
<input type="checkbox" name="aihao[]" value="羽毛球">羽毛球
<input type="checkbox" name="aihao[]" value="看书">看书
<input type="checkbox" name="aihao[]" value="写字">写字
备注：
<textarea name="beizhu" ></textarea><br>

性别：
<input type="radio" name="xingbie" value="男">男
<input type="radio" name="xingbie"value="女">女<br>

<input type="submit" value="提交">
</form>

</body>
</html>