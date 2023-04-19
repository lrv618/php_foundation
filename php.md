# 拍黄片（PHP）



PHP（全称：PHP：*Hypertext Preprocessor*，即"PHP：超文本预处理器"）是一种通用开源 脚本语言。



- PHP 可以生成动态页面内容
- PHP 可以创建、打开、读取、写入、关闭服务器上的文件
- PHP 可以收集表单数据
- PHP 可以发送和接收 cookies
- PHP 可以添加、删除、修改您的数据库中的数据
- PHP 可以限制用户访问您的网站上的一些页面
- PHP 可以加密数据



 PHP语法

PHP 脚本在服务器上执行，然后将纯 HTML 结果发送回浏览器。

前端页面：HTML和JS、CSS 后端页面：PHP、JSP、ASP、ASPX等等



## 注释

```php
// 这是 PHP 单行注释

/*
这是
PHP 多行
注释
*/
```



## 输出语句

echo/print 语句

echo 和 print 区别:

- *echo - 可以输出一个或多个字符串*
- *print - 只允许输出一个字符串，返回值总为 1*

> echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。



#### echo 语句

echo 是一个语言结构，<u>使用的时候可以不用加括号，也可以加上括号</u>： echo 或 echo()。

```php
<?php
echo "<h2>PHP 很有趣!</h2>";
echo "Hello world!<br>";
echo "我要学 PHP!<br>";
echo "这是一个"."字符串，"."使用了", "多个", "参数。";
?>
    
<?php
$txt1="学习 PHP";
$txt2="MASHIBING.COM";
$cars=array("Volvo","BMW","Toyota");

echo $txt1;
echo "<br>";
echo "在 $txt2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$cars[0]}";
?>
```



#### print 语句

print 同样是一个语言结构，<u>可以使用括号，也可以不使用括号</u>： print 或 print()

```php
<?php
print "<h2>PHP 很有趣!</h2>";
print "Hello world!<br>";
print "我要学习 PHP!";
//或者
print("PHP是全世界最好的语言");
?>

<?php
$txt1="mashibing";
$txt2="bafangwy.com";
$cars=array("xiaoyun","wanli","wuya");
print $txt1;
print "<br>";
print "在 $txt2 学习 PHP ";
print "<br>";
print "我们老师 {$cars[0]}";
?>
```



#### EOF语句

- *必须后接分号*，否则编译通不过。 
- *EOF可以用任意其它字符代替，只需保证结束标识与开始标识一致*。
- *结束标识必须顶格独自占一行*(即必须从行首开始，前后不能衔接任何空白和字符)。
- <EOF 开始标记开始，以 EOF 结束标记结束，结束标记必须顶头写，不能有缩进和空格，
  且在结束标记末尾要有分号 。
- 开始标记和结束标记相同，比如<u>常用大写的 EOT、EOD、EOF 来表示</u>，但是不只限于那几个(也 可以用：JSON、HTML等)，<u>只要保证开始标记和结束标记不在正文中出现即可</u>。
- 开始标记和结束标记之间的变量可以被正常解析，但是函数则不可以。

```php
<?php
echo <<<EOF
<h1>我的第一个标题</h1>
<p>我的第一个段落。</p>
EOF;
// 结束需要独立一行且前后不能空格
?>
```



#### print_r

​		关于变量的易于理解的信息,如果给出的是 string、integer 或 float，将打印变量值本身。如果给出的是 array，将会按照一定*格式显示键和元素*。



#### var_dump

​		此函数显示关于一个或多个*表达式的结构信息*，*包括表达式的类型与值*。数组将递归展开值，通 过缩进显示其结构。



> var_dump 和 print_r 的区别
>
> var_dump 返回表达式的类型与值而 print_r 仅返回结果，相比调试代码使用 var_dump 更便于阅读。



```php
<?php
$name="mashibing";
$a=array("Volvo","BMW","Toyota");
// 结束需要独立一行且前后不能空格
echo $a;
echo "</br>";

print($a);
echo "</br>";   //序列化

print_r($a);
echo "</br>";

var_dump($a);
?>
```



![image-20230322005658606](.\images\image-20230322005658606.png)



需求： 

1. 使用no1函数的方式echo输出“这是我的第一个网站交互版本PRO” 
2. 使用no2函数的方式print输出“mashibing 网站是最好的网站” 
3. 使用no3函数的方式EOF输出：

```php
<?php
function no1(){
echo "这是我的第一个网站交互版本PRO <br> ";
echo PHP_EOL;
}

function no2(){
print("mashibing 网站是最好的网站 <br> ");
echo PHP_EOL;
}

function no3(){
echo <<<EOF
php是最好用的语言
phpstudy框架也挺好用 <br>
EOF;
}

no1();
no2();
no3();
?>
```





## 常量

- 常量由英文字母、下划线、和数字组成,但<u>数字不能作为首字母出现</u> 
- 常量名不需要加 $ 修 饰符 
- 注意： 常量在整个脚本中都可以使用
- 常量在定义后，*默认是全局变量，可以在整个运行的脚本的任何地方使用*。



设置 PHP 常量 设置常量，使用 ***define() 函数***，函数语法如下：

```php
bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
```

该函数的三个参数

- **name：**必选参数，*常量名称，即标志符*
- **value：** 必选参数，*常量的值*
- **case_insensitive** ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。<u>默认是大小写敏 感的</u>

```php
<?php
//header("content-type:text/html;charset=utf-8"); //保持中文不乱码

// 区分大小写的常量名
define("constant", "test");   
echo constant; // 输出 "test"

//echo '<br>';

//echo CONSTANT // 输出 "CONSTANT"，但是有警告信息，表示该常量未定义
?>
```



```php
<?php
header("content-type:text/html;charset=utf-8");

define("constant", "Test");
function myTest() {
    echo constant;
}

myTest(); // 输出 "Test"

?>
```





##  变量

### PHP 变量规则

1. 变量以 $ 符号开始，后面跟着变量的名称
2. 变量名必须以字母或者下划线字符开始
3. 变量名只能包含字母、数字以及下划线（A-z、0-9 和 _ ）
4. 变量名不能包含空格 
5. **变量名是区分大小写的（y 和 Y 是两个不同的变量）**
6. PHP 是一门弱类型语言,**不必向 PHP 声明该变量的数据类型**

```php
<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>
```

> 我们使用字母（如 x），并给它赋值（如 5）。
>
> 从上面的表达式 z=x+y ，我们可以计算出 z 的值为 11。
>
> 在 PHP 中，这些$字母被称为变量。



### 变量作用域

PHP 有四种不同的变量作用域：

-  local 
- global 
- static 
- parameter



#### 局部和全局作用域

- 在所有函数外部定义的变量，拥有全局作用域。除了函数外，<u>全局变量可以被脚本中的任何部分 访问</u>，要在一个函数中访问一个全局变量，需要使用 global 关键字。
- 在 PHP <u>函数内部声明的变量是局部变量</u>，<u>仅能在函数内部访问</u>



```php
<?php
$x=5; // 全局变量
function myTest()
{
	$y=10; // 局部变量
	echo "<p>测试函数内变量:<p>";
	echo "变量 x 为: $x";
	echo "<br>";
	echo "变量 y 为: $y";
}
myTest();
	echo "<p>测试函数外变量:<p>";
	echo "变量 x 为: $x";
	echo "<br>";
	echo "变量 y 为: $y";
?>
```



- ***global 关键字用于函数内访问全局变量*** 
- 在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字

```php
<?php
$x=5;
$y=10;
function myTest()
{
	global $x,$y;
	$y=$x+$y;
}
myTest();
echo $y; // 输出 15
?>
```



- 将所有全局变量存储在一个名为 *$GLOBALS[index] 的数组*中。 index 保存变量的名称。
- ***<u>这个数组可以在函数内部访问，也可以直接用来更新全局变量。</u>***

```php
<?php
$x=5;
$y=10;
function myTest()
{
$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
myTest();
echo $y;
?>
```



#### Static 作用域

​      Static 作用域 当一个函数完成时，它的所有变量通常都会被删除。

​     第一次声明变量时***使用 static 关键字***,每次调用该函数时，*该变量将会保留着函数前一次被调用时的值*。

```php
<?php
function myTest()
{
	static $x=0;     //该变量将会保留着函数前一次被调用时的值。
	echo $x;
	$x++;
	echo PHP_EOL; // 换行符
}
myTest();
myTest();
myTest();
?>
```



#### 参数作用域

- 参数是***通过 调用代码 将 值 传递给函数***的局部变量。
- 参数是在参数列表中声明的，作为函数声明的一部分：

```php
<?php
function myTest($x)
{
	echo $x;
}
myTest(5);  //调用代码 将 值 传递给函数
?> 
```



### 超级全局变量

在一个脚本的全部作用域中 都可用

##### $GLOBALS  

包含了*全部变量的全局组合数组*。变量的名字就是数组的键

```php4
<?php
$x = 75;
$y = 25;
function addition()
{
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>
```



##### $_SERVER   

​		$_SERVER 是一个包含了<u>诸如*头信息(header)、路径(path)、以及脚本位置(script locations)等等信 息的数组*</u>。这个数组中的项目由 Web 服务器创建。

```php
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
```



![image-20230322212458262](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192326983.png)



![image-20230322212545259](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192326502.png)



##### $_GET

*"method="get"*    ***明文***

***$_GET 也可以收集URL中发送的数据***

服务器端用Request.QueryString获取变量的值，对于post方式，服务器端用Request.Form获取提交的数据。

get传送的数据量较小，不能大于2KB

包含参数的超链接HTML页面

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<form action="2.php" method="get">
	<input type="text" name="bcd">
</form>
</body>
</html>

```

2.php代码如下：

```php
<?php
echo $_GET['bcd'];
?>
```



#####  $_POST   

PHP $_POST 被广泛应用于收集表单数据

*"method="post"*    

*action 属性中指定的脚本文件*。 get是把参数数据队列加到提交表单的ACTION属性所指的URL中，值和表单内各个字段一一对应，在URL中可以看到。post是通过HTTP post机制，将表单内各个字段与其内容放置在HTML HEADER内一起传送到ACTION属性所指的URL地址。用户看不到这个过程。

post传送的数据量较大，一般被默认为不受限制。但理论上，IIS4中最大量为80KB，IIS5中为100KB。



```php
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_POST['fname'];
echo $name;
?>

</body>
</html>

```

<img src="https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192326925.png" alt="image-20230322213721305" style="zoom:150%;" />



##### $_REQUEST

$_REQUEST可以获取以POST方法和GET方法提交的数据，但是速度比较慢





##### $_ENV



##### $_COOKIE

*cookie 常用于识别用户。*

cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。每当同一台计算机通 过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的 值。

setcookie() 函数用于设置 cookie。

 **注释：**setcookie() 函数必须位于 标签之前。

```php
setcookie(name, value, expire, path, domain);
```

![image-20230323011306861](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192327866.png)



将创建名为 "user" 的 cookie，并为它赋值 "runoob"。我们也规定了此 cookie 在一小时后过期：

```php
<?php
setcookie("user", "admin", time()+3600);
?>
<html>
```

在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码。（为 防止 URL 编码，请使用 setrawcookie() 取而代之。）



设置 cookie 的过期时间。这也许比使用秒表示的方式简单

```php
<?php
$expire=time()+60*60*24*30;
setcookie("user", "runoob", $expire);
?>
<html>
```



PHP 的 $_COOKIE 变量用于取回 cookie 的值。

取回了名为 "user" 的 cookie 的值，并把它显示在了页面上：

```php
<?php
$expire=time()+60*60*24*30;
setcookie("user", "runoob", $expire);
// 输出 cookie 值
echo $_COOKIE["user"];
// 查看所有 cookie
var_dump($_COOKIE);
?>
```



使用 *isset() 函数*来确认是否已设置了 cookie

```php
<?php
if {(isset($_COOKIE["user"]))
	echo "欢迎 " . $_COOKIE["user"] . "!<br>";
   }else{
    echo "普通访客!<br>";
}		
?>
```

何删除 Cookie

```php
<?php
// 设置 cookie 过期时间为过去 1 小时
setcookie("user", "", time()-3600);
?>
```





##### $_SESSION

PHP session 变量用于存储关于用户会话（session）的信息，或者更改用户会话（session）的设置

​		您在计算机上操作某个应用程序时，您打开它，做些更改，然后关闭它。这很像一次对话 （Session）。计算机知道您是谁。它清楚您在何时打开和关闭应用程序。然而，在因特网上问题 出现了：由于 HTTP 地址无法保持状态，Web 服务器并不知道您是谁以及您做了什么。 

​		PHP session 解决了这个问题，它通过在服务器上存储用户信息以便随后使用（比如用户名称、 购买商品等）。然而，会话信息是临时的，在用户离开网站后将被删除。如果您需要永久存储信 息，可以把数据存储在数据库中。 Session 的工作机制是：为每个访客创建一个唯一的 id (UID)，并基于这个 UID 来存储变量。UID 存储在 cookie 中，或者通过 URL 进行传导。



PHP Session

*session_start() 函数必须位于 标签之前

```php
<?php session_start(); ?>
```

​			上面的代码会向服务器注册用户的会话，以便您可以开始保存用户信息，同时会为用户会话分配 一个 UID。



存储 Session 变量

存储和取回 session 变量的正确方法是使用 PHP $_SESSION 变量

```php
<?php
session_start();
// 存储 session 数据
$_SESSION['views']=1;
?>

<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views'];
?>
</body>
</html>
```



​			我们创建了一个简单的 page-view 计数器。isset() 函数检测是否已设置 "views" 变量。如果已设置 "views" 变量，我们累加计数器。如果 "views" 不存在，则创建 "views" 变量， 并把它设置为 1：

```php
<?php
session_start();
if(isset($_SESSION['views']))
{
	$_SESSION['views']=$_SESSION['views']+1;
}else{
	$_SESSION['views']=1;
}

echo "浏览量：". $_SESSION['views'];
?>
```



调用 session_destroy() 函数彻底销毁 session

```php
<?php
session_destroy();
?>
```







### 魔法方法

LINE 的值就依赖于它在脚本中所处的行来决定，这些特殊的常量不区分大小写；



'__LINE__'显示行

```php
<?php
echo "第".__LINE__."行";
?>
    //输出结果：第2行
```



'__FILE__'显示 文件路径

如果是符号连接，则是解析后的绝对路径

```html
<?php
echo __FILE__ ;
?>
//输出结果：D:\phpstudy_pro\WWW\a\no1.php
```





' __DIR__ '显示文件所在的目录

文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录

```php
<?php
echo __DIR__ ;
?>
```



'__FUNCTION__'显示函数名称、__METHOD__类似

```php
<?php
function test() {
echo '函数名为：' . __FUNCTION__ ;
}
test();
?>
```



'__CLASS__' 显示类的名称（区分大小写）

```php
<?php
class test {
function _print() {
    echo '类名:' . __CLASS__ . "<br>";
    echo '函数名:' . __FUNCTION__ ;
	}
}

$t = new test();
$t->_print();
?>
```



<img src="https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192327594.png" alt="image-20230322232538550" style="zoom:150%;" />





## 数据类型

- String（字符串）
- Integer（整型） 
- Float（浮点型） 
- Boolean（布尔型） 
- Array（数组） 
- Object（对象） 
- NULL（空值） 
- Resource（资源类型）



### 字符串

一个字符串是一串字符的序列，就像 "Hello world!"。 

PHP var_dump();函数返回变量的数据类型和值：

赋一个文本值给变量时，请记得给文本值加上单引号或者双引号

```php
<?php
$x = "Hello world!";
var_dump($x);
echo "<br>";
$x = 'Hello world!';
var_dump($x);
?>
```



#### 连接运算符 (.) 

***运算符 (.) 用于把两个字符串值连接起来***

```php
<?php
$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1." ".$txt2;    //Hello world! What a nice day!
?>
```



#### strlen() 函数

- ***strlen() 函数返回字符串的长度（字节数）***
- strlen() 常常用在循环和其他函数中,确定字符串何时结束

```php
<?php
echo strlen("Hello world!");
?>
//代码将输出：12
```



####  strpos() 函数

- ***strpos() 函数用于在字符串内查找一个字符或一段指定的文本***
- 字符串中找到匹配，*该函数会返回第一个匹配的字符位置*，如果*未找到匹配，则返回 FALSE*

```php
<?php
echo strpos("Hello world!","world");
?>
//代码将输出：6
```

> ​		上面的实例中，字符串 "world" 的位置是 6。之所以是 6 而不是 7 的原因是，字符串 中第一个字符的位置是 0，而不是 1。



### 整型

- 整数不能包含逗号或空格 
- 整数是没有小数点的
- 整数可以是正数或负数 整型可以用三种格式来指定：十进制， ***十六进制（ 以 0x 为前缀）***或***八进制（前缀为 0）***。

```php
<?php
$x = 5985;
var_dump($x);
echo "<br>";

$x = -345; // 负数
var_dump($x);
echo "<br>";

$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";

$x = 047; // 八进制数
var_dump($x);
?>
```

![image-20230322145028554](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192327366.png)



### 浮点型

- 浮点数是带小数部分的数字，或是指数形式。 
- 科学记数法格式<u>**3.14*10^3 可以使用3.14e3**</u>来表示



```php
<?php
$x = 10.365;
var_dump($x);
echo "<br>";

$x = 2.4e3;
var_dump($x);
echo "<br>";

$x = 8E-5;
var_dump($x);
?>
```

<img src="https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192327051.png" alt="image-20230322150959299" style="zoom:150%;" />



### 布尔型

- 布尔型 TRUE 或 FALSE。
-  布尔型用于条件判断。

```php
<?php
$x=true;
$y=false;
var_dump($x,$y);
?>
```



<img src="https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192328479.png" alt="image-20230322150903436" style="zoom:150%;" />



### NULL 值

- NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值
-  NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别
- **<u>可以通过设置变量值为 NULL 来清空变量数据</u>**

```php
可以通过设置变量值为 NULL 来清空变量数据：
<?php
$x="Hello world!";
$x=null;
var_dump($x);
?>
```



### PHP 资源类型

- PHP 资源 resource 是一种特殊变量，保存了到外部资源的一个引用
-  常见资源数据类型有打开文件、数据库连接、图形画布区域等 
- 由于资源类型变量保存有为打开文件、数据库连接、图形画布区域等的特殊句柄，因此将其它类 型的值转换为资源没有意义
- 使用 get_resource_type() 函数可以返回资源（resource）类型

```php
get_resource_type(resource $handle): string
```



此函数返回一个字符串，用于表示传递给它的 resource 的类型。如果参数不是合法的 resource， 将产生错误。

```php
<?php
$c = mysql_connect();
echo get_resource_type($c)."\n";
// 打印：mysql link
$fp = fopen("foo","w");
echo get_resource_type($fp)."\n";
// 打印：file
$doc = new_xmldoc("1.0");
echo get_resource_type($doc->doc)."\n";
// 打印：doent
?>
```



### 类型比较

- 松散比较：使用两个等号 == 比较，**只比较值，不比较类型**。 
- 严格比较：用三个等号 === 比较，**除了比较值，也比较类型**。

eg:

```php
<?php
echo '0 == false: ';    
var_dump(0 == false);    //0 == false: bool(true) 
echo "</br>";
echo '0 === false: ';    //0 === false: bool(false)
var_dump(0 === false);   
?>
```





## 运算符

括号优先运算

###  赋值运算符

***$y += 100;   //相当于$y=$y+100;***

```php
<?php
$y=20;
$y += 100;   //相当于$y=$Y+100;
echo $y."</br>"; // 输出120

$z=50;
$z -= 25;
echo $z."</br>"; // 输出25

$i=5;
$i *= 6;
echo $i."</br>"; // 输出30

$j=10;
$j /= 5;
echo $j."</br>"; // 输出2

$k=15;
$k %= 4;
echo $k."</br>"; // 输出3
?>
```



```php
<?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world!
$x="Hello";
$x .= " world!";
echo $x; // 输出Hello world!
?>
```



### 递增/递减运算符

***echo ++$x; 相当于echo $x=$x+1;  //先+1再输出；***

***echo $y++; 相当于echo $y;  $y=$y+1；  //先输出再加1；***

```php
<?php
$x=10;
echo ++$x; // 输出11  echo $x=$x+1;

$y=10;
echo $y++; // 输出10     echo $y;  $y=$y+1;


$z=5;
echo --$z; // 输出4

$i=5;
echo $i--; // 输出5
?>
```



###  比较运算符

```php
<?php
$x=100;
$y="100";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
$a=50;
$b=90;
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>
```



### 数组运算符

```php
<?php
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$d = array("b" => "green","a" => "red" );
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
echo "</br>";
var_dump($x == $y);
echo "</br>";
var_dump($x === $y);
echo "</br>";
var_dump($x != $y);
echo "</br>";
var_dump($x <> $y);    //不等于
echo "</br>";
var_dump($x !== $y);
echo "</br>";
var_dump($x == $d);
echo "</br>";
var_dump($x === $d);
echo "</br>";
?>
```



## 判断

- if 语句 - 在条件成立时执行代码 
- if...else 语句 - 在条件成立时执行一块代码，条件不成立时执行另一块代码 
- if...elseif....else 语句 - 在*若干条件之一成立时执行一个代码块* 
- switch 语句 - 在*若干条件之一成立时执行一个代码块*



### if...elseif....else 

```php
if (条件){
	if 条件成立时执行的代码;
}elseif (条件){
	elseif 条件成立时执行的代码;
}else{
	条件不成立时执行的代码;
}
```

eg:

```php
<?php
$t=date("H");

if ($t<"10"){
	echo "Have a good morning!";
}elseif ($t<"20"){
    echo "Have a good day!";
}else{
    echo "Have a good night!";
}
?>
```



### switch

*switch 语句用于根据多个不同条件执行不同动作(有选择地执行若干代码块)*

```php
<?php
switch (n){
case label1:
	如果 n=label1，此处代码将执行;
	break;
        
case label2:
	如果 n=label2，此处代码将执行;
	break;
        
default:
	如果 n 既不等于 label1 也不等于 label2，此处代码将执行;
}
?>
```

eg:

```php
<?php
$favcolor="red";

switch ($favcolor){
case "red":
	echo "你喜欢的颜色是红色!";
	break;
case "blue":
	echo "你喜欢的颜色是蓝色!";
	break;
case "green":
	echo "你喜欢的颜色是绿色!";
	break;
default:
	echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
}
?>
```



##  循环

- while - 只要指定的条件成立，则循环执行代码块 
- do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环 
- for - 循环执行代码块指定的次数 
- foreach - 根据数组中每个元素来循环代码块



### while

while 循环将重复执行代码块，直到指定的条件不成立

```php
while (条件)
{
	要执行的代码;
}
```

eg:

```php
<?php
$i=1;
while($i<=5){
	echo "The number is " . $i . "<br>";
	$i++;
}
?>
```

![image-20230322190858847](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192328996.png)



### do...while 语句

```
do
{
	要执行的代码;
}
while (条件);
```

eg:

```php
<?php
$i=1;
do
{
	$i++;
	echo "The number is " . $i . "<br>";
}
	while ($i<=5);
?>
```



### for循环



- 初始值：*主要是初始化一个变量值*，用于设置一个计数器（但可以是任何在循环的开始被执 行一次的代码）
- 条件：*循环执行的限制条件。如果为 TRUE，则循环继续。如果为 FALSE，则循环结束*
- 增量：主要用于*递增计数器*（但可以是任何在循环的结束被执行的代码）

  *初始值和增量参数可为空*，或者有多个表达式（用逗号分隔）。

```php
for (初始值; 条件; 增量)
{
	要执行的代码;
}
```

eg:

```php
<?php
for ($i=1; $i<=5; $i++)
{
	echo "数字为 " . $i . PHP_EOL;
}
?>
```





## 函数

[PHP: 函数参考 - Manual](https://www.php.net/manual/zh/funcref.php)



### PHP 函数准则

- 函数的名称应该提示出它的功能 
- 函数名称以字母或下划线开头（不能以数字开头）
- 函数是通过调用函数来执行

```php
<?php
function functionName()
{
	// 要执行的代码
functionName(); //调用函数
?>
```



### 函数传值

```php
<?php
function writeName($fname)
{
    echo $fname ;
}

echo "My name is ";
writeName("Kai Jim");

?>
```



### 函数 - 返回值

```php
<?php
function add($x,$y)
{
	$total=$x+$y;
	return $total;
}
echo "1 + 16 = " . add(1,16);
?>
```



### phpinfo()

*phpinfo函数可以显示出PHP 所有相关信息*。排查配置php是否出错或漏配置模块的主要方式

```php
<?php
	phpinfo();
?>
```

![image-20230322215542038](D:\网络安全\php\images\image-20230322215542038.png)





### eval() 

*eval() 函数用来执行一个字符串表达式，并返回表达式的值*

```php
<?php
$a="123+";
$b="456";
echo eval("return $a$b;");
?>
```



### system()

```php
<?php
system("ipconfig");
?>
```

```php
<?php
system($_GET['ipconfig']);
?>
```



### htmlspecialchars() 函数

***htmlspecialchars() 函数把一些预定义的字符转换为 HTML 实体***

预定义的字符是：

```html
& （和号） 成为 &
" （双引号） 成为 "
' （单引号） 成为 &#039;
< （小于） 成为 &#gt
> （大于） 成为 &#gt
```

```php
<?php
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
	echo "没有爱好</br>";
}

echo "</br>备注为：".$beizhu."</br>";
echo "性别为：".$xingbie."</br>";
?>
```



### empty()函数

```php
<?php
$a="123321";
echo empty($a);
?>
```



```php
<?php
$a="";
if(empty($a)){
	echo "kong";
}else{
	echo "bukong";
}
?>
```



## 数组

- 数值数组 - 带有数字 ID 键的数组 
- 关联数组 - 带有指定的键的数组，每个键关联一个值 
- 多维数组 - 包含一个或多个数组的数组



```php
<?php
$cars=array("Volvo","BMW","Toyota")
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="Toyota"
?> 
    
<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
```

实例中创建了一个数组， 然后使用 PHP var_dump() 函数返回数组的数据类型和值：

```php
<?php
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
?>
```



![image-20230322151211474](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192328280.png)



#### count()函数

*count() 函数用于返回数组的（元素的数量*

```php
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>
    //输出结果：3
```



#### 遍历数值数组

*遍历并打印数值数组中的所有值*，您可以使用 for 循环，如下所示：

```php
<?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++)
{
	echo $cars[$x];
	echo "<br>";
}
?>
/*输出结果
Volvo
BMW
Toyota*/
```



#### 关联数组

关联数组是使用您*分配给数组的指定的键的数组*

两种创建关联数组的方法

```php
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

or

$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";    
    
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
```



***遍历并打印关联数组中的所有值，您可以使用 foreach 循环***

```php
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
```



```php
<?php
$cars=array("Volvo","BMW","Toyota");
sort($cars); //下面的实例将 $cars 数组中的元素按照字母升序排列：
foreach($cars as $y){
    echo $y."</br>";
}
```





​		下拉菜单是***多选的（ multiple="multiple"）***，我们可以通过将设置 ***select name="q[]" 以数 组的方式获取***，以下使用 POST 方式提交

```php
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

```



#### 数组排序

> - sort() - 对数组进行升序排列 
>
> - rsort() - 对数组进行降序排列 
>
> - asort() - 根据关联数组的值，对数组进行升序排列
>
> -  ksort() - 根据关联数组的键，对数组进行升序排列 
>
> - arsort() - 根据关联数组的值，对数组进行降序排列 
>
> - krsort() - 根据关联数组的键，对数组进行降序排列
>









## 对象

- PHP 中，*对象必须声明*
- 须*使用class关键字声明类对象*
- 对象里面包含很多函数
- 在类中定义数据类型，然后在实例化的类中使用数据类型
- $color = new Car();    //*相当于格式化*

> return只返回，不显示
>
> echo ;  返回显示



```php
<?php
//对象里面包含很多函数

class Car  //class 类     //car对象
{
    function what($color) {     //function(){} 函数
    return $color;   //只返回，不显示    //echo ;  返回显示
}
}

$color = new Car();    //相当于格式化
echo $color -> what("GREEN");

echo"<br/>";

var_dump($color);
#输出结果  object(Car)#1 (0) { } 

?>
```

![image-20230322161250433](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192328078.png)









## 文件包含

> include 和 require 除了处理错误的方式不同之外，在其他方面都是相同的：
>
> - require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。
> -  include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。
>



 include 和 require

2.php文件

```php
<?php
$a="aaaaa";
?>
```

主文件

```php
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include '2.txt';
echo $a;
?>
</body>
</html>

```



##  文件以及文件上传

实例在 test 项目下完成，目录结构为：

```

|-----upload 		# 文件上传的目录
|-----index.html 	# 表单文件
|-----upload.php 	# php 上传代码

```



index.html上传表单文件

- 标签的 enctype 属性规定了在提交表单时要使用哪种内容类型。在*表单需要二进制数据时， 比如文件内容，请使用 "multipart/form-data"。*
- *标签的 type="file" 属性规定了应该把输入作为文件来处理*。举 例来说，当在浏览器中预览时，会看到输入框旁边有一个浏览按钮。

```html
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="upload.php" method="post"   enctype="multipart/form-data">   //
	<label for="file">文件名：</label>
	<input type="file" name="file" id="file"><br>
	<input type="submit" name="submit" value="提交">
</form>
</body>
</html>
```





"upload.php"上传文件的代码

参数是表单的 input name，第二个下标可以是 "name"、"type"、"size"、"tmp_name"

![image-20230323005359046](https://raw.githubusercontent.com/lrv618/php_foundation/main/images/202304192328972.png)

```php
<?php
if ($_FILES["file"]["error"] > 0)
{
	echo "错误：" . $_FILES["file"]["error"] . "<br>";
}else{
	echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
	echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
	echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
}
?>
```



上传限制

```php
<?php
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);//explode() 函数使用一个字符串分割另一个字
符串，并返回由字符串组成的数组。
$extension = end($temp); // 获取数组最后的数值
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800) // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
{
	echo "错误：: " . $_FILES["file"]["error"] . "<br>";
}else{
	echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
	echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
	echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
}
}else{
	echo "非法的文件格式";
}
?>
```



保存被上传的文件

```php
// 判断当前目录下的 upload 目录是否存在该文件
// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
if (file_exists("upload/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " 文件已经存在。 ";
}else{// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
	move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" .$_FILES["file"]["name"]);
`	echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
}
}
}else{
	echo "非法的文件格式";
}
?>
```





## 习题

### 计算器

自定义输入两个值进行+-*/的计算

<a href="https://github.com/lrv618/php_foundation/tree/main/atext3.php">跳转到计算器实验代码</a>



### 数字(╯‵□′)╯炸弹

<a href="https://github.com/lrv618/php_foundation/tree/main/a/text4.php">跳转到数字炸弹实验代码</a>



### 注册页面

<a href="https://github.com/lrv618/php_foundation/tree/main/a/text5.php">跳转到注册页面实验代码</a>



### 网站登录注册+登录页面Pro

<a href="https://github.com/lrv618/php_foundation/tree/main/alogin.php">跳转到网站登录注册+登录页面Pro实验代码</a>
