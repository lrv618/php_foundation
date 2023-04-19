<?php
$a = $_POST['q'];
foreach($a as $aa){
    echo $aa."</br>";
}
?>


<html>
<head>
<meta charset="utf-8">
</head>

<form action="" method="post">
<select multiple="multiple" name="q[]">
<option value="">选择一个站点:</option>
<option value="Baidu">Baidu</option>
<option value="GOOGLE">Google</option>
<option value="TAOBAO">Taobao</option>
</select>
<input type="submit" value="提交">
</form>
