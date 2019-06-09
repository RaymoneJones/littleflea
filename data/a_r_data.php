<?php
session_start();
include("../php/conn.php");
if(isset($_GET["table"])&&$_GET["table"]=='per1'){ //判断所需要的参数是否存在
    $sql="select * from tb_user where status='0' and flag='1'";

    $row=$conn->getRowsArray($sql);
    echo json_encode($row);


}else if(isset($_GET["table"])&&$_GET["table"]=='per2'){
    $sql="select * from tb_user where status='1' and flag = '1'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);

}else if(isset($_GET["table"])&&$_GET["table"]=='mat1'){
    $sql="select * from tb_matter";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);

}else if(isset($_GET["table"])&&$_GET["table"]=='mat2'){
    $sql="select * from tb_matter where matter_publish='".$_SESSION["username"]."' and matter_state='已完成' and matter_assess='未评价'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);

}


