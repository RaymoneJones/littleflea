<?php
header("Content-type: text/html; charset=utf-8");
$goods_name = $_POST['goods_name'];
$goods_from = $_POST['goods_from'];
$goods_detail = $_POST['goods_detail'];
$goods_price = $_POST['goods_price'];
$goods_num=$_POST['goods_num'];
$goods_class=$_POST['goods_class'];
$userid=0001;
print_r($_POST);
if ($goods_name == ''){
    echo '<script>alert("请输入商品名！");history.go(-1);</script>';
    exit(0);
}
if ($goods_price == ''){
    echo '<script>alert("请输入单价");history.go(-1);</script>';
    exit(0);
}
if ($goods_num == ''){
    echo '<script>alert("请输入数量");history.go(-1);</script>';
    exit(0);
}

    $conn = new mysqli('localhost','root','123456','flea');
    if ($conn->connect_error){
        echo '数据库连接失败！';
        exit(0);
    }else {
//        $image = mysqli_escape_string($conn,file_get_contents($_FILES['uploadfile']));
        $sql = "select goods_name from tb_goods where goods_name = '$_POST[goods_name]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
            echo '<script>alert("同名商品已经存在");history.go(-1);</script>';
        } else {
            $sql_insert = "INSERT INTO tb_goods ".
                "(goods_name,userid,goods_detail,goods_from, goods_price,goods_num,goods_class) ".
                "VALUES ".
                "('$goods_name','$userid','$goods_detail','$goods_from','$goods_price','$goods_num','$goods_class')";
            $res_insert=mysqli_query( $conn, $sql_insert );
            if ($res_insert) {
                echo "<script>alert('商品信息已提交，请等待管理员审核！\\n审核结果将在第一时间通过您预留邮箱发送，请注意查收 。'); </script>";
                echo '<script>window.location.href="home.php";</script>';
            } else {
                printf("Error: %s\n", mysqli_error($conn));
                echo "<script>alert('提交失败，请联系管理员！'); history.go(-1)</script>";
            }
        }
    }

?>

