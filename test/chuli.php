<?php
header('content-type:text/html;charset=utf-8');

if ($_FILES["file"]["error"] > 0)
{
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}
else
{
    // 文件中文转码
    //iconv('utf-8', 'gbk', $_FILES["file"]["name"]);
    //取出后缀名
    $ext = strrchr($_FILES["file"]["name"],'.');
    move_uploaded_file($_FILES["file"]["tmp_name"],
        "upload/" . uniqid() . $ext);
    $arr['code'] = 666;
    $addr="upload/" . uniqid() . $ext;
    $arr['message'] = "已经保存到: " . "upload/" . uniqid() . $ext;
//
    echo json_encode($arr);die;
}