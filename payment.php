<?php
session_start();
//print_r($_SESSION);
$conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
$sql ="update tb_goods set goods_num=goods_num-'1' where tb_goods.no in (select goods_id from tb_cart where userid=".$_SESSION['no'].") ";
$r=$conn->query($sql);
//print_r($r);
if($r){
//    ->num_rows>0
    $sql1="update tb_goods set goods_status=3 where goods_num=0";
    $r1=$conn->query($sql1);
//    print_r($r1);
}
$sql2="update tb_cart  set num=num-'1' where userid=".$_SESSION['no']." ";
$r2=$conn->query($sql2);
//print_r($r2);
if($r2)
//->num_rows>0
{
    $sql3="update tb_cart set status=0 where num =0";
    $r3=$conn->query($sql3);
//    print_r($r3);
}
if($sql&&$sql1&&$sql2&&$sql3) {
    echo "<script>alert('购物车信息已提交。'); </script>";
    echo '<script>window.location.href="shopping-cart.php";</script>';
}