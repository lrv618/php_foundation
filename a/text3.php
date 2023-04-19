<!-- php语言部分 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>

<?php

//include('session.php');

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$opt = $_GET["opt"];
$calculate = $num1.$opt.$num2;
$result = eval("return $calculate;");      //eval()函数用来执行一个字符串表达式，并返回表达式的结果值
?>



<!-- html语言部分-->
<body>
<form action="" method="get">   

<!-- label标签可以扩大文字触发触发范围 -->
<label>数字1：</label><input type="number" name="num1" value="<?php echo $num1;?>">

<label>运算符:</label>
<select name="opt" id="">
<option value="+" >+</option>
<option value="-" >-</option>
<option value="*" >*</option>
<option value="/" >/</option>
</select>

<label>数字2：</label><input type="number" name="num2" value="<?php echo $num2;?>">   

<label></label><input type="submit" value="计算">
</br>

<?php
echo $calculate.'='.$result;
?>

</form>
</body>
</html>


