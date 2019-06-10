<html lang="en">
<head>

</head>
<body>
<?php
//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$str = '@';
//strpos 大小写敏感  stripos大小写不敏感    两个函数都是返回str2 在str1 第一次出现的位置
if(strpos($username,$str) === false){     //使用绝对等于
    //包含数据库连接文件
    include('conn.php');
    //检测用户名及密码是否正确
    $conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
    $check_query = mysqli_query($conn,"select * from tb_admin where username='$username' and password='$password' limit 1");
    if (!$check_query) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_array($check_query);
    if($check_query->num_rows==1){
        //登录成功
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['no']=$row['no'];
        $_SESSION['email']=$row['email'];
        echo "<meta http-equiv=\"refresh\" content=\"0;url=../home_admin.html\">";
    } else {
        echo" <meta http-equiv=\"refresh\" content=\"0;url=loginerror.php\">";
    }
}else{
    $email = $_POST["username"];
    // 检测邮箱是否合法
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        echo" <meta http-equiv=\"refresh\" content=\"0;url=loginerror.php\">";
        exit;
    }
    else{
        //包含数据库连接文件
        include('conn.php');
        //检测用户名及密码是否正确
        $check_query = mysqli_query($conn,"select * from tb_admin where email='$username' and password='$password' limit 1");
        if (!$check_query) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $row = mysqli_fetch_array($check_query);
        if($check_query->num_rows==1){
            //登录成功
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['no']=$row['no'];
            $_SESSION['email']=$row['email'];
            echo "<meta http-equiv=\"refresh\" content=\"0;url=..//home_admin.html\">";
        } else {
            echo" <meta http-equiv=\"refresh\" content=\"0;url=loginerror.php\">";
        }
    }
}
?>
</body>
</html>

