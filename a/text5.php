<head>
<meta charset="utf-8">
</head>
<?php

include("conn.php");


$name=$_POST['name'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$shouji=$_POST['shouji'];
$photo=$_FILES['photo'];

// echo $name,$password1,$password2,$shouji,$photo;
// var_dump($photo);
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if( empty($name) || empty($password1) || empty($password2) || empty($shouji) ){ 
        $ERR="账号密码、手机号码不能为空";
    }elseif($password1!=$password2){
        $ERR="两次密码不一致";
    }elseif(strlen($shouji)<8){
        $ERR="手机号码不足8位";
    }else{
        //echo $_FILES["photo"]["name"];
        

        //处理图片
        if (file_exists("upload/" . $_FILES["photo"]["name"])){
            echo $_FILES["photo"]["name"] . " 文件已经存在。 ";     //如果upload/.路径下已经存放了该文件，就不用再放进取 
        }else{
        // 如果 upload 目录不存在该文件，则将文件上传到 upload 目录下
        move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" .  $_FILES["photo"]["name"]);
        //echo "文件存储在: " . "upload/" . $_FILES["photo"]["name"];
        }
        
        //数据库用户信息录用
        }
        
        $photofile=$photo['name'];

        $sqlinsert="                                             
            insert into dmzdb_tbl(user,pass,phone,file) 
            values ('$name','$password1','$shouji','$photofile');
            ";
        
        echo "$sqlinsert";
        var_dump($conn1);
            

        if(mysqli_query($conn1, $sqlinsert)){
            $zhErr="注册成功</br>";
            }else{
            $zhErr="注册失败</br>";
            }
            
}


?>

<form action="" method="post" enctype="multipart/form-data" >
名字：
<input type="text" name="name" > <br>
密码：
<input type="password" name="password1" ><br>
重新输入密码：
<input type="password" name="password2" ><br>
请输入手机号码：
<input type="passwrd" name="shouji" ><br>
上传头像：
<input type="file" name="photo" ><br>

<input type="submit" value="提交"><br>
</form>

<?php


echo $ERR;

echo "你注册的用户为：".$name."</br>";
echo "你注册的手机号码：".$shouji."</br>";

?>
<?php echo $zhErr."</br>";
?>

<img src="<?php echo "upload/".$_FILES["photo"]["name"]; ?>">