<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

var_dump($cars);
echo "<br>";

echo count($cars);
echo "<br>";

for($a=0;$a<count($cars);$a++){
    echo "<br>";
    echo $cars[$a];
}



$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";

echo "<br>";
echo $age['Peter'];
echo "<br>";

$age=array("Peter"=>"399","Ben"=>"37","Joe"=>"43");

krsort($age);
//其他函数补充
//rsort() - 对数组进行降序排列
//asort() - 根据数组的值，对数组进行升序排列
//arsort() 根据数组的值，对数组进行降序排列
//ksort();根据数组的键，对数组进行升序排列
//krsort() - 根据数组的键，对数组进行降序排列

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    
}

$cars=array("Volvo","BMW","Toyota");
//sort($cars); //下面的实例将 $cars 数组中的元素按照字母升序排列：
foreach($cars as $y){
echo $y."</br>";
}


?>
