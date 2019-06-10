
<?php
header("Content-type: text/html; charset=utf-8");
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$email = $_POST['email'];
$phone=$_POST['phone'];
$flag=$_POST['shenfen'];
//$_POST['shenfen']校内为0 校外为1
if($flag==0){
    $sno=$_POST['sno'];
    $realname1=$_POST['realname1'];
    $idno=null;
    $realname2=null;
}else{
    $sno=null;
    $realname1=null;
    $idno=$_POST['idno'];
    $realname2=$_POST['realname2'];
}
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
//            echo "'sql_insert start<br>";
//            $sql_insert = "insert into tb_user (username,password,email) values('$_POST[username]','$_POST[password]','$_POST[email]')";
            $sql_insert = "INSERT INTO tb_user ".
                "(username,password, email,phone,flag,sno,realname1,idno,realname2) ".
                "VALUES ".
                "('$username','$password','$email','$phone','$flag','$sno','$realname1','$idno','$realname2')";
//            echo "'sql_insert finish<br>";
//            echo "'res_insert start<br>";
//            $res_insert = $conn->query($sql_insert);
            $res_insert=mysqli_query( $conn, $sql_insert );
//            echo "'res_insert finish<br>";
            if ($res_insert) {
                echo "<script>alert('注册已提交，请等待管理员审核！\\n审核结果将在第一时间通过您预留邮箱发送，请注意查收 。\\n现在您将转入平台试用界面.......'); </script>";
                echo '<script>window.location="../index.html";</script>';
//                echo "数据插入成功\n";
            } else {
                    printf("Error: %s\n", mysqli_error($conn));
                echo "<script>alert('提交失败，请联系管理员！'); history.go(-1)</script>";
            }
        }
    }
}else{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>
