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

}else if(isset($_GET["table"])&&$_GET["table"]=='goods1'){
    $sql="select * from tb_goods  where goods_status='0'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);

}else if(isset($_GET["table"])&&$_GET["table"]=='goods2'){
    $sql="select * from tb_goods where goods_status='1'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);
}else if(isset($_GET["table"])&&$_GET["table"]=='user1'){
    $sql="select * from tb_user where status='1' and flag='1'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);
}else if(isset($_GET["table"])&&$_GET["table"]=='per3'){
    $sql="select * from tb_user where status='0' and flag = '0'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);

}else if(isset($_GET["table"])&&$_GET["table"]=='per4'){
    $sql="select * from tb_user where status='1' and flag = '0'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);

}else if(isset($_GET["table"])&&$_GET["table"]=='outor1'){
    $sql="select * from tb_user where status='1' and flag='0'";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);
}else if(isset($_GET["table"])&&$_GET["table"]=='check_goods'){
    $sql="select * from tb_goods where goods_status='1' ";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);
}else if(isset($_GET["table"])&&$_GET["table"]=='out'){
    $sql="select * from tb_goods where userid=".$_SESSION['no']." ";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);
}else if(isset($_GET["table"])&&$_GET["table"]=='sell'){
    $sql="select * from tb_goods where goods_status='3' ";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);
}else if(isset($_GET["table"])&&$_GET["table"]=='in'){
    $sql="select * from tb_cart,tb_goods where tb_cart.status='0' and tb_cart.userid=".$_SESSION['no']." and tb_cart.goods_id=tb_goods.no";
    $row=$conn->getRowsArray($sql);
    echo json_encode($row);
}


