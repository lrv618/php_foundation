<?php
session_start();
$_SESSION["login"]='false';

session_destroy();  //销毁session
header('Location:login.php');


// echo $_SESSION["login"];
?>