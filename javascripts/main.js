function escape(string) {
    return string ? String(string).replace(/[&<>"']/g, function(match) {
        return {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        }[match];
    }) : '';
}

var cities = [
    '手机数码',
    '生活百货',
    '家用电器',
    '运动户外',
    '家具/饰品',
    '游戏装备',
    '男装',
    '男鞋',
    '女装',
    '女鞋',
    '美妆',
    '箱包',
    '服饰配件',
    '乐器',
    '健身',
    '玩具',
    '宠物',
    '园艺',
    '课本',
    '习题',
    '教辅',
    '家教',
    '自习',
];

$('#example-1').selectivity({
    allowClear: true,
    items: cities,
    placeholder: '请选择商品类别'
});

// toggle between code samples
$('body').on('click', '.handle', function(event) {
    var active = ($(event.currentTarget).hasClass('jquery') ? 'jquery' : 'react');
    $('.example-code').removeClass('active');
    $('.example-code.' + active).addClass('active');
    $('.handle').removeClass('active');
    $('.handle.' + active).addClass('active');
});
