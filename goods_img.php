<html>
<head>
    <meta charset="UTF-8">
    <title>商品上架——“小跳蚤”二手交易平台</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="http://www.jq22.com/jquery/vue.min.js"></script>

    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--   上传-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/skin/layer.css" rel="external nofollow" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/layer.js"></script>


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

</head>
<body>
<div >
    <div class="container" style="opacity: 0%">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <?php
                echo '<form id="formform" class="form-horizontal"  method="post" action="up.php?name='.$_GET['name'].' " enctype="multipart/form-data">';
                ?>

                    <span class="heading">商品上架—基本信息</span>
                    <div class="form-group">
                        <label for="file">文件名：</label>
                        <input type="file" name="file" id="file"><br>
                        <div align="center" >
                            <button  type="submit" class="mybt">下一步</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="javascripts/selectivity-jquery.js"></script>
<script src="javascripts/main.js"></script>
</html>