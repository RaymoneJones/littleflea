<?php
//// 连接数据库
//$conn=@mysql_connect("localhost","root","")  or die(mysql_error());
//@mysql_select_db('demo',$conn) or die(mysql_error());
//
//// 判断action
//$action = isset($_REQUEST['action'])? $_REQUEST['action'] : '';
//
//// 上传图片
///

if($submit=='add'){
    $image = mysqli_escape_string(file_get_contents($_FILES['uploadfile']));
//    $type = $_FILES['photo']['type'];
    $sqlstr = "insert into photo(type,binarydata) values('".$type."','".$image."')";
    @mysql_query($sqlstr) or die(mysql_error());
    header('location:upload_image_todb.php');
    exit();
//// 显示图片
//}elseif($action=='show'){
//    $id = isset($_GET['id'])? intval($_GET['id']) : 0;
//    $sqlstr = "select * from photo where id=$id";
//    $query = mysql_query($sqlstr) or die(mysql_error());
//    $thread = mysql_fetch_assoc($query);
//    if($thread){
//        header('content-type:'.$thread['type']);
//        echo $thread['binarydata'];
//        exit();
//    }
//}else{
//// 显示图片列表及上传表单
//    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title> upload image to db demo </title>
    </head>

    <body>
    <form name="form1" method="post" action="upload_image_todb.php" enctype="multipart/form-data">
        <p>图片：<input type="file" name="photo"></p>
        <p><input type="hidden" name="action" value="add"><input type="submit" name="b1" value="提交"></p>
    </form>

    <?php
    $sqlstr = "select * from photo order by id desc";
    $conn = new mysqli('localhost','root','123456','flea');
    $query = $conn->query($sqlstr) ;
    $result = array();
    while($thread=mysqli_fetch_assoc($query)){
        $result[] = $thread;
    }
    foreach($result as $val){
        echo '<p><img src="upload_image_todb.php?action=show&id='.$val['id'].'&t='.time().'" width="150"></p>';
    }
    ?>
    </body>
    </html>
<!--    --><?php
//}
//?>