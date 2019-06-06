<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录失败</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="alert alert-warning" style="margin-top: 10%;margin-left: 35%;margin-right: 35%">
    <a href="#" class="close" data-dismiss="alert">
        &times;
    </a>
    <strong>登录失败！</strong>请输入正确的用户名和密码。
    <?php
    exit('点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
    ?>
</div>

</body>
</html>