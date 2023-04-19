<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="welcome.php" method="post">
名字: <input type="text" name="fname">
年龄: <input type="text" name="age">
<input type="submit" value="提交">
</form>

<?php
include('session.php');

$a = $_POST['q'];
foreach($a as $aa){
echo $aa."</br>";
}
?>


//请补充PHP代码
//要求选择用户选择对应的站点以后回显网站的完整url
<form action="#" method="post">
<select multiple="multiple" name="q[]">
<option value="">选择一个站点:</option>
<option value="baidu">Runoob</option>
<option value="google">Google</option>
<option value="taobao">Taobao</option>
</select>
<input type="submit" value="提交">
</form>
</form>


<?php
$q=$_GET['q'];
if($q=="baidu"){
echo "www.baidu.com";
}elseif($q=="google"){
echo "www.google.com";
}elseif($q=="taobao"){
echo "www.taobao.com";
}else{

}
?> 

<form action="" method="get">
<input type="radio" name="q" value="RUNOOB" />Runoob
<input type="radio" name="q" value="GOOGLE" />Google
<input type="radio" name="q" value="TAOBAO" />Taobao
<input type="submit" value="提交">

</body>
</html>