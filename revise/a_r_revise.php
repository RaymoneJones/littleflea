<?php
session_start();
include("../php/conn.php");
if(isset($_GET["no"])) { //判断所需要的参数是否存在
    if (@$_GET["caozuo0"]) {
        $sql = "UPDATE tb_user SET status='1' WHERE no='" . $_GET["no"] . "'";
        print_r($sql);
        if ($conn->uidRst($sql) == 1) {
            echo "<script>window.location.href='../php/admin_registration.php';</script>";
        } else {
            echo "<script>alert('确认失败');</script>";
        }
    }
    if (@$_GET["caozuo1"]) {
        $sql = "UPDATE tb_user SET status='0' WHERE no='" . $_GET["no"] . "'";
        if ($conn->uidRst($sql) == 1) {
            echo "<script>window.location.href='../php/admin_registration.php';</script>";
        } else {
            echo "<script>alert('确认失败');</script>";
        }
    }
}


//if(isset($_GET["id"])&&isset($_GET["assess"])){ //判断所需要的参数是否存在
//    if($_GET["assess"]==1){
//        $sql2="UPDATE tb_matter SET matter_assess='优秀' WHERE matter_id='".$_GET["id"]."'";
//    }else if($_GET["assess"]==2){
//        $sql2="UPDATE tb_matter SET matter_assess='良好' WHERE matter_id='".$_GET["id"]."'";
//    }else if($_GET["assess"]==3){
//        $sql2="UPDATE tb_matter SET matter_assess='一般' WHERE matter_id='".$_GET["id"]."'";
//    }
//    if($conn1-> uidRst($sql2) == 1){
//        echo "<script>window.location.href='../matter.php?type=3';</script>";
//    }else{
//        echo "<script>alert('评价失败');window.location.href='../matter.php?type=3';</script>";
//    }
//}
//