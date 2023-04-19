<?php

session_start();
// echo $_session['login'];

if ($_SESSION["login"] == true) {
    echo "您已经成功登陆,<a href='zhuxiao.php'>点击注销</a>";
    

} else {
    $_SESSION["login"] == false;
    die("您无权访问,<a href='login.php'>点击跳转登录页面</a>");    //die强制禁止，不会访问后面代码
    }

    
?>