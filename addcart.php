<?php
session_start();
header('content-type:text/html;charset=utf-8');
$goodsid=$_GET['no'];
$userid=$_SESSION['no'];
//$goodsid=3;
//$userid=1;
$conn = new mysqli('localhost','root','123456','flea');
if ($conn->connect_error){
    echo '数据库连接失败！';
    exit(0);
}else {
//        $image = mysqli_escape_string($conn,file_get_contents($_FILES['uploadfile']));
    $sql = "select * from tb_cart where goods_id ='$goodsid' ";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    $number = mysqli_num_rows($result);
    if ($number==1) {
        echo '<script>alert("同名商品已经存在");history.go(-1);</script>';
    } else {
        $sql_insert = "INSERT INTO tb_cart ".
            "(goods_id,userid) ".
            "VALUES ".
            "('$goodsid','$userid')";
        $res_insert=mysqli_query( $conn, $sql_insert );
        if ($res_insert) {
            echo "<script>alert('商品信息已添加，请前往购物车查看 。'); </script>";
            echo '<script>history.go(-1)</script>';
        } else {
            printf("Error: %s\n", mysqli_error($conn));
            echo "<script>alert('提交失败，请联系管理员！'); history.go(-1)</script>";
        }
    }
}