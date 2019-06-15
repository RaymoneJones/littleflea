<?php
session_start();
include("../php/conn.php");
if(isset($_GET["no"])) { //判断所需要的参数是否存在
    if (@$_GET["caozuo0"]) {
        $sql = "UPDATE tb_user SET status='1' WHERE no='" . $_GET["no"] . "'";
//        print_r($sql);
        if ($conn->uidRst($sql) == 1) {
           $username=$_GET['username'];
            require_once '../QQMailer.php';
// 实例化QQMailer
            $mailer = new QQMailer(true);
// 添加附件
//$mailer->addFile('20130VL.jpg');
// 邮件标题
            $title = '注册成功回执邮件';
// 邮件内容
            $content = <<< EOF
                                    <h5>尊敬的$username</h5>
                                    <p>&nbsp;&nbsp;恭喜您，注册成功！您可以使用设置的用户名/邮箱和密码登录<a href="http://134.175.95.174/littleflea/index.php">“小跳蚤”</a></p>
EOF;

// 发送QQ邮件
            $mailer->send($_GET['email'], $title, $content);
            echo "<script>window.location.href='../admin_registration.php';</script>";
        } else {
            echo "<script>alert('确认失败');</script>";
        }
    }
    if (@$_GET["caozuo1"]) {
        $sql = "UPDATE tb_user SET status='0' WHERE no='" . $_GET["no"] . "'";
        if ($conn->uidRst($sql) == 1) {
            echo "<script>window.location.href='../admin_registration.php';</script>";
        } else {
            echo "<script>alert('确认失败');</script>";
        }
    }
//    商品审核用
    if (@$_GET["caozuo2"]) {
        $sql = "UPDATE tb_goods SET goods_status='1' WHERE no='" . $_GET["no"] . "'";
//        print_r($sql);
        if ($conn->uidRst($sql) == 1) {
            $userid=$_GET['userid'];
            $sql="select * from tb_user where no='".$userid."'";
            $r=$conn->getRowsArray($sql);
            $real=$r[0];
            $username=$real['username'];
            $email=$real['email'];
            $goods_name=$_GET['goods_name'];
            require_once '../QQMailer.php';
// 实例化QQMailer
            $mailer = new QQMailer(true);
// 添加附件
//$mailer->addFile('20130VL.jpg');
// 邮件标题
            $title = '商品上架成功回执邮件';
// 邮件内容
            $content = <<< EOF
                                    <h5>尊敬的$username</h5>
                                    <p>&nbsp;&nbsp;恭喜，您上架的商品  $goods_name  审核通过！您可以使用设置的用户名/邮箱和密码登录<a href="http://134.175.95.174/littleflea/index.php">“小跳蚤”</a>查看详情</p>
EOF;

// 发送QQ邮件
            $mailer->send($email, $title, $content);

            echo "<script>window.location.href='../admin_goods.php';</script>";
        } else {
            echo "<script>alert('确认失败');</script>";
        }
    }
    if (@$_GET["caozuo3"]) {
        $sql = "UPDATE tb_goods SET goods_status='0' WHERE no='" . $_GET["no"] . "'";
        if ($conn->uidRst($sql) == 1) {
            echo "<script>window.location.href='../admin_goods.php';</script>";
        } else {
            echo "<script>alert('确认失败');</script>";
        }
    }
}
