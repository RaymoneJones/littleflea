<!-- 除上传图片外均已完善-->

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>商品上架——“小跳蚤”二手交易平台</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="http://www.jq22.com/jquery/vue.min.js"></script>

    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--   上传-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/skin/layer.css" rel="external nofollow" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/layer.js"></script>

<!--    标签-->
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/stylesheet.css">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/selectivity-jquery.css">
    <style>
        .upload_warp_img_div_del {
            position: absolute;
            top: 6px;
            width: 16px;
            right: 4px;
        }

        .upload_warp_img_div_top {
            position: absolute;
            top: 0;
            width: 100%;
            height: 30px;
            background-color: rgba(0, 0, 0, 0.4);
            line-height: 30px;
            text-align: left;
            color: #fff;
            font-size: 12px;
            text-indent: 4px;
        }

        .upload_warp_img_div_text {
            white-space: nowrap;
            width: 80%;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .upload_warp_img_div img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle;
        }

        .upload_warp_img_div {
            position: relative;
            height: 100px;
            width: 120px;
            border: 1px solid #ccc;
            margin: 0px 30px 10px 0px;
            float: left;
            line-height: 100px;
            display: table-cell;
            text-align: center;
            background-color: #eee;
            cursor: pointer;
        }

        .upload_warp_img {
            border-top: 1px solid #D2D2D2;
            padding: 14px 0 0 14px;
            overflow: hidden
        }

        .upload_warp_text {
            text-align: left;
            margin-bottom: 10px;
            padding-top: 10px;
            text-indent: 14px;
            border-top: 1px solid #ccc;
            font-size: 14px;
        }

        .upload_warp_right {
            float: left;
            width: 57%;
            margin-left: 2%;
            height: 100%;
            border: 1px dashed #999;
            border-radius: 4px;
            line-height: 130px;
            color: #999;
        }

        .upload_warp_left img {
            margin-top: 32px;
        }

        .upload_warp_left {
            float: left;
            width: 40%;
            height: 100%;
            border: 1px dashed #999;
            border-radius: 4px;
            cursor: pointer;
        }

        .upload_warp {
            margin: 14px;
            height: 130px;
        }

        .upload {
            border: 1px solid #ccc;
            background-color: #fff;
            width: 500px;
            box-shadow: 0px 1px 0px #ccc;
            border-radius: 4px;
        }

        .hello {
            width: 550px;
            margin-left: 5%;
            text-align: center;
        }
    </style>
    <style>
        body
        {
            background-image:url("picture/flea.png");
            background-repeat:no-repeat;
            background-color: #00b4ef;
        }
        .mybt{
            alignment: center;
            font-size: 14px;
            color: #fff;
            background: #00b4ef;
            border-radius: 30px;
            padding: 10px 25px;
            border: none;
            text-transform: capitalize;
            transition: all 0.5s ease 0s;
        }

    </style>
</head>
<body>
<div >
    <div class="container" style="opacity: 0%">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form id="formform" class="form-horizontal"  method="post" action="upload_chuli.php">
<!--                    method="post" action="upload_chuli.php"-->
                    <span class="heading">商品上架</span>
                    <div class="form-group">
                        <input type="text" class="form-control" id="goods_name" name="goods_name" placeholder="商品名">
                    </div>
                    <div class="form-group">
                       <textarea form="formform" placeholder="请输入商品详情（150字）" style="width: 100%" id="goods_detail" name="goods_detail"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="goods_from" name="goods_from" placeholder="品牌/产地">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="goods_tag" name="goods_tag" placeholder="分类标签">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="goods_price" name="goods_price" placeholder="价格">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " id="goods_num" name="goods_num" placeholder="数量">
                    </div>
                    <div class="form-group">
                        <div id="example-1" style="width: 100%;border-radius: 20px;"></div>
                        <input type="text"   id="goods_class"  name="goods_class" style="visibility: hidden">
                    </div>
                    <div id="app">
                        <div class="hello">
                            <div class="upload">
                                <div class="upload_warp">
                                    <div class="upload_warp_left" @click="fileClick">
                                        <img src="upload.png">
                                    </div>
                                    <div class="upload_warp_right" @drop="drop($event)" @dragenter="dragenter($event)" @dragover="dragover($event)">
                                        或者将文件拖到此处
                                    </div>
                                </div>
                                <div class="upload_warp_text">
                                    选中{{imgList.length}}张文件，共{{bytesToSize(this.size)}}
                                </div>
                                <input @change="fileChange($event)" type="file" id="upload_file"  name="file" multiple style="display: none"/>
                                <div class="upload_warp_img" v-show="imgList.length!=0">
                                    <div class="upload_warp_img_div" v-for="(item,index) of imgList">
                                        <div class="upload_warp_img_div_top">
                                            <div class="upload_warp_img_div_text">
                                                {{item.file.name}}
                                            </div>
                                            <img src="del.png" class="upload_warp_img_div_del" @click="fileDel(index)">
                                        </div>
                                        <img :src="item.file.src" >


                                    </div>
                                </div>
                        </div>
                    </div>
                    </div>
                    <br>
                        <div align="center" >
                            <button  type="submit" class="mybt">提交</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //  import up from  './src/components/Hello'
   var tupian= new Array();
    var app = new Vue({
        el: '#app',
        data () {
            return {
                imgList: [],
                size: 0
            }
        },
        methods: {
            fileClick() {
                document.getElementById('upload_file').click()
            },
            fileChange(el) {
                if (!el.target.files[0].size) return;
                this.fileList(el.target);
                el.target.value = ''
            },
            fileList(fileList) {
                let files = fileList.files;
                for (let i = 0; i < files.length; i++) {
                    //判断是否为文件夹
                    if (files[i].type != '') {
                        this.fileAdd(files[i]);
                    } else {
                        //文件夹处理
                        this.folders(fileList.items[i]);
                    }
                }
            },
            //文件夹处理
            folders(files) {
                let _this = this;
                //判断是否为原生file
                if (files.kind) {
                    files = files.webkitGetAsEntry();
                }
                files.createReader().readEntries(function (file) {
                    for (let i = 0; i < file.length; i++) {
                        if (file[i].isFile) {
                            _this.foldersAdd(file[i]);
                        } else {
                            _this.folders(file[i]);
                        }
                    }
                })
            },
            foldersAdd(entry) {
                let _this = this;
                entry.file(function (file) {
                    _this.fileAdd(file)
                })
            },
            fileAdd(file) {
                //总大小
                this.size = this.size + file.size;
                //判断是否为图片文件
                if (file.type.indexOf('image') == -1) {
                    file.src = 'wenjian.png';
                    this.imgList.push({
                        file
                    });
                } else {
                    let reader = new FileReader();
                    reader.vue = this;
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        file.src = this.result;
                        tupian.push(file.src);
                        // document.getElementById('test').value=file.src;
                        this.vue.imgList.push({
                            file
                        });
                    }
                }
            },
            fileDel(index) {
                this.size = this.size - this.imgList[index].file.size;//总大小
                this.imgList.splice(index, 1);
            },
            bytesToSize(bytes) {
                if (bytes === 0) return '0 B';
                let k = 1000, // or 1024
                    sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
                    i = Math.floor(Math.log(bytes) / Math.log(k));
                return (bytes / Math.pow(k, i)).toPrecision(3) + ' ' + sizes[i];
            },
            dragenter(el) {
                el.stopPropagation();
                el.preventDefault();
            },
            dragover(el) {
                el.stopPropagation();
                el.preventDefault();
            },
            drop(el) {
                el.stopPropagation();
                el.preventDefault();
                this.fileList(el.dataTransfer);
            }

        }
    }

    )



</script>
<script>
    $("#example-1").on("change", function(e){
        var val = $('#example-1').selectivity('value');
        document.getElementById("goods_class").value=val;

        // document.write(val);
    });


    </script>

<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="javascripts/selectivity-jquery.js"></script>
<script src="javascripts/main.js"></script>
</body>
</html>