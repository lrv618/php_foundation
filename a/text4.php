//include('session.php');



<?php
$rand=$_GET["rand"];    //rand：随机数

if ($rand==null){     
    $rand=rand(10,100);
}

$num1=$_GET["num1"];

// if($num1>$rand){
//     $x= "big";
// }elseif($num1<$rand){
//     $x= "small";
// }else{
//     $x= "You are right.";
// }

switch($num1==$rand){
    case true:
        $x = "right";
        break;
    case false:
        $x = "worng";
        break;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<body>


<form action="" method="get">
        <input type="password" name="rand" value="<?php echo $rand;?>">

        <h1>清空上面的内容，即可重新开始游戏</h1>
        </br>

        <h1>猜猜我的数字是多少，范围10-99</h1>

        猜数字<input type="number" name="num1" value="<?php echo $num1;?>">
        <input type="submit" value="爆破按钮">
        </br>

        <?php echo "输入:".$x;?>
    </form>
</body>
</html>


<?php

echo "</br>";
for ($num1=10; $num1<=$rand; $num1++)
{
  if($num1=$rand){
    echo "结果为：".$num1 ;
  }  
}

?>
