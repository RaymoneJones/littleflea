<?php
require_once 'QQMailer.php';
// 实例化QQMailer
$mailer = new QQMailer(true);
// 添加附件
//$mailer->addFile('20130VL.jpg');
// 邮件标题
$title = '愿得一人心，白首不相离。';
// 邮件内容
$content = <<< EOF
                                    <p align="center">
                                    皑如山上雪，皎若云间月。
                                    <br>闻君有两意，故来相决绝。
                                    <br>今日斗酒会，明旦沟水头。
                                    <br>躞蹀御沟上，沟水东西流。
                                    <br>凄凄复凄凄，嫁娶不须啼。
                                    <br>愿得一人心，白首不相离。
                                    <br>竹竿何袅袅，鱼尾何簁簁！
                                    <br>男儿重意气，何用钱刀为！
                                    </p>
EOF;

// 发送QQ邮件
$mailer->send('1240829086@qq.com', $title, $content);
//echo  "chenggong";
//引入PHPMailer的核心文件
//
//include("PHPMailer.php");
//
//include("SMTP.php");
//
//// 实例化PHPMailer核心类
//
//$mail = new \PHPMailer\PHPMailer\PHPMailer();
//$mail->IsSMTP();
//// $mail-> Host ="";
//// $mail-> Port = 25;
//// 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
//
//$mail->SMTPDebug = 1;
//
//// 使用smtp鉴权方式发送邮件
//
//$mail->isSMTP();
//
//// smtp需要鉴权 这个必须是true
//
//$mail->SMTPAuth = true;
//
//// 链接qq域名邮箱的服务器地址
//
//$mail->Host = 'smtp.qq.com';
//
//// 设置使用ssl加密方式登录鉴权
//
//$mail->SMTPSecure = 'ssl';
//
//// 设置ssl连接smtp服务器的远程服务器端口号
//
//$mail->Port = 465;
//
//// 设置发送的邮件的编码
//
//$mail->CharSet = 'UTF-8';
//
//// 设置发件人昵称 显示在收件人邮件的发件人邮箱地址前的发件人姓名
//
//$mail->FromName = "“小跳蚤”平台管理员";
//
//// smtp登录的账号 QQ邮箱即可
//
//$mail->Username = '569536091@qq.com';
//
//// smtp登录的密码 使用生成的授权码
//
//$mail->Password = 'mxdkgeydaqbmbbdd';
//
//// 设置发件人邮箱地址 同登录账号
//
//$mail->From = '569536091@qq.com';
//
//// 邮件正文是否为html编码 注意此处是一个方法
//
//$mail->isHTML(true);
//
//// 设置收件人邮箱地址
//
//$mail->addAddress('1240829086@qq.com');
//
//// 添加多个收件人 则多次调用方法即可
//
////$mail->addAddress('87654321@163.com');
//
//// 添加该邮件的主题
//
//$mail->Subject = '注册回执';
//
//// 添加邮件正文
//
//$mail->Body = '<h1>恭喜您，注册成功！您可以使用设置的用户名/邮箱和密码登录<a href="http://134.175.95.174/littleflea/index.html">“小跳蚤”</a> </h1>';
//
//// 为该邮件添加附件
//
////$mail->addAttachment('./example.pdf');
//
//// 发送邮件 返回状态
//
//$status = $mail->send();
