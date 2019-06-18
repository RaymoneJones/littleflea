$(function () {
//初始化Table
var teacherTable = new TableInit();
teacherTable.Init();
});

var TableInit = function () {
var oTableInit = new Object();
//初始化Table
oTableInit.Init = function () {
$('#teacherTable').bootstrapTable({
url: 'getTeacher',//请求后台的url
method: 'post',//请求方式
toolbar: '#toolbar',//工具按钮用哪个容器
striped: true,//是否显示行间隔色
cache: false,
sortable: true,//是否启用排序
sortOrder: 'asc',//排序方式
clickToSelect: true,//是否启用点击选中行
uniqueId: 'teacher_id',//每一行的唯一标识，一般为主键列
columns: [{
field: 'teacher_id',
title: '工号'
}, {
field: 'teacher_name',
title: '姓名'
}, {
field: 'teacher_sex',
title: '性别'
}, {
field: 'department_id',
title: '所属学院'
}]
});
};
return oTableInit; //这句之前一直写错了
};