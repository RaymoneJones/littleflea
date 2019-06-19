<?php

// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$name=$_GET['name'];
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 10485760)   // 小于 10240 kb
    && in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
//        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
        echo '<script>alert("错误：: "' . $_FILES["file"]["error"] .' ");</script>';
    }
    else
    {
//        echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
//        echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
//        echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//        echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";

        // 判断当期目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        if (file_exists("test/upload/" . $_FILES["file"]["name"]))
        {
//            echo $_FILES["file"]["name"] . " 文件已经存在。 ";
            echo "<script>alert('提交失败，文件已经存在！'); history.go(-1)</script>";
        }
        else
        {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "test/upload/" . $_FILES["file"]["name"]);
            $tupian= "../test/upload/". $_FILES["file"]["name"];
            $conn = new mysqli('localhost','root','123456','flea');
            if ($conn->connect_error){
                echo '数据库连接失败！';
                exit(0);
            }else {
                $sql_insert = "update tb_goods set goods_img ='".$tupian."' where goods_name= '".$_GET['name']."'";
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
    }
}
else
{
    echo "非法的文件格式";
}