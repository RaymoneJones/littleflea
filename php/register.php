
<?php
header("Content-type: text/html; charset=utf-8");
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$emai = $_POST['email'];
if ($username == ''){
    echo '<script>alert("请输入用户名！");history.go(-1);</script>';
    exit(0);
}
if ($password == ''){
    echo '<script>alert("请输入密码");history.go(-1);</script>';
    exit(0);
}
if ($password != $repassword){
    echo '<script>alert("密码与确认密码应该一致");history.go(-1);</script>';
    exit(0);
}
if($password == $repassword){
    $conn = new mysqli('localhost','root','123456','flea');
    if ($conn->connect_error){
        echo '数据库连接失败！';
        exit(0);
    }else {
        $sql = "select username from tb_user where username = '$_POST[username]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
            echo '<script>alert("用户名已经存在");history.go(-1);</script>';
        } else {
            echo "'sql_insert start<br>";
            $sql_insert = "insert into tb_user (username,password,email) values('$_POST[username]','$_POST[password]','$_POST[email]')";
            echo "'sql_insert finish<br>";
            echo "'res_insert start<br>";
            $res_insert = $conn->query($sql_insert);
            echo "'res_insert finish<br>";
            if ($res_insert) {
                echo '<script>window.location="../html/index.html";</script>';
            } else {
                echo "<script>alert('系统繁忙，请稍候！');</script>";
//                history.go(-1)
            }
        }
    }
}else{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>
