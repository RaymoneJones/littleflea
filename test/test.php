$("#mybt").click(function(){
$.ajax({
url:'upload_chuli.php',
type:'post',
data:{
"goods_name":$("#goods_name").val(),
"goods_detail":$("#goods_detail").val(),
"goods_from":$("#goods_from").val(),
"goods_class":$("#goods_class").val(),
"goods_price":$("#goods_price").val(),
"goods_num":$("#goods_num").val(),
"goods_img":tupian
},
//拼装json数组
// data:$("#fm").serialize(),   //直接从form表单中取出数组
dataType:"JSON",
// success:function(msg){
//     if(msg) {
//         $("p").append("账号为：" +  msg.username + "<br />" + "密码为：" + msg.password );
//     }
//     else {
//         alert("输入异常!");
//     }
// },
error:function(){
console.log("ERROR");
}
});
});


















var uploading = false;
function upload(){
//首先封装一个方法 传入一个监听函数 返回一个绑定了监听函数的XMLHttpRequest对象
var xhrOnProgress=function(fun) {
xhrOnProgress.onprogress = fun; //绑定监听
//使用闭包实现监听绑
return function() {
//通过$.ajaxSettings.xhr();获得XMLHttpRequest对象
var xhr = $.ajaxSettings.xhr();
//判断监听函数是否为函数
if (typeof xhrOnProgress.onprogress !== 'function')
return xhr;
//如果有监听函数并且xhr对象支持绑定时就把监听函数绑定上去
if (xhrOnProgress.onprogress && xhr.upload) {
xhr.upload.onprogress = xhrOnProgress.onprogress;
}
return xhr;
}
}
var data = new FormData($('#mainForm')[0]); //要加【0】
console.log(data);
if(uploading){
layer.alert("文件正在上传中，请稍候");
return false;
}
$.ajax({
type: 'POST',
url: 'chuli.php',  //当前路径
data: data,
dataType: 'json',
processData: false,  //序列化，no
contentType: false,  //不设置内容类型
beforeSend: function(){
uploading = true;
},
//进度条要调用原生xhr
xhr:xhrOnProgress(function(evt){
var percent = Math.floor(evt.loaded / evt.total*100);//计算百分比
console.log(percent);
// 设置进度条样式
$('#jdt').css('width',percent * 3 + 'px');
$('#jdt').css('background','skyblue');
//显示进度百分比
$('#jdt').text(percent+'%');
$('#loaded').text(evt.loaded/1024 + 'K');
$('#total').text(evt.total/1024 + 'K');
}),
success: function (data) {
if (data.code == 200) {
layer.msg(data.message, {icon: 1, time: 1000});
//成功后关闭修改页
setTimeout(function(){
var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe的索引
parent.layer.close(index);  //在执行关闭
} ,2000);
//还有刷新下iframe的界面
parent.location.reload();
} else {
layer.msg(data.message, {icon: 2, time: 3000});
}
uploading = false;
},
// error: function (data) {
//     alert('服务异常，请稍后重试');
//     console.log(data);
// }
});
}