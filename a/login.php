<?php
include("conn.php");

$user=$_POST['user'];
$pass=$_POST['pass'];


  
$_SESSION['login']='false';


$chaxun1="SELECT USER,pass FROM dmzdb_tbl WHERE USER='$user' AND pass='$pass';";   //select查询页面
// echo $chaxun1;
//var_dump($chaxun1);

$lianjie=mysqli_query($conn1,$chaxun1);

if(@mysqli_num_rows($lianjie)){    //@表示
    
    $login = "登录成功";
    header('Location:youxi.php');   //header跳转到youxi.php页面
    session_start();//开始记录session

    $_SESSION['login']='true';  //session
    // echo $_SESSION['login'];

}else{
    
    $login = "登录失败";
    $_SESSION['login']='false';  //session
    
    // echo $_SESSION['login'];

    }
    

?>



<html>
<head>
<mate charset="utf-8">
</head>
<h1>登录页面</h1>
<form action="" method="post" ></br>
账号：<input type="text" name="user"> </br>
密码：<input type="password" name="pass"> </br>
<input type="submit">
</form>

<a href="text5.php">点击注册</a></br>     <!--text5.php 是注册页面   -->

</html>

<?php echo $login;?>