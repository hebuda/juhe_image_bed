<?php
/**
 * Created by PhpStorm.
 * User: 烟雨寒云(https://www.yyhy.me/)
 * Date: 2018/11/6
 * Time: 14:11
 */

include './Core/Common.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="referrer" content="never">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $name; ?> - <?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="./Assets/css/main.css" rel="stylesheet">
</head>
<body background="https://ww2.sinaimg.cn/large/a15b4afegy1fpp139ax3wj200o00g073.jpg">
<div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block text-center" style="float: none;">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $name; ?>〃'▽'〃</font></div>
            <div class="panel-body text-center" align="center">
                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $zzqq; ?>&site=qq&menu=yes">
                    <img class="img-circle m-b-xs" width="100" style="border: 2px solid skyblue;" src="<?php echo $tou; ?>" alt="<?php echo $title; ?>">
                </a>
                <p><font color="info">高速外链，全球CDN加速，支持最多20张图片同时上传！</font>
                <p/>
                <form enctype="multipart/form-data">
                    <button type="button" onclick="file.click();" class="btn btn-default btn-sm" id="toUploaded"></button>
                    <input type="file" name="file" id="file" style="display:none" accept="image/*" multiple="multiple"/>
                    <p>
                        <label><input name="type" type="radio" value="Sina" checked>新浪 </label>
                        <label><input name="type" type="radio" value="Baidu">百度 </label>
                        <label><input name="type" type="radio" value="Sougou">搜狗 </label>
                        <label><input name="type" type="radio" value="Sohu">搜狐 </label>
                        <label><input name="type" type="radio" value="OoXx">OoXx </label>
                        <label><input name="type" type="radio" value="SMMS">SMMS </label>
                        <label><input name="type" type="radio" value="Vim">Vim </label>
                        <label><input name="type" type="radio" value="Mixtape">Mixtape </label>
                    </p>
                    <input type="button" value="开始上传" class="btn btn-default" onclick="doUpload();">
                    <p id="image"></p>
                </form>
            </div>
            <div class="panel-footer text-center">
                <small><code id="hitokoto">(〃'▽'〃)获取中...</code></small>
            </div>
        </div>
    </div>
    <script src="//cdn.bootcss.com/jquery/2.1.3/jquery.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/clipboard.js/1.7.1/clipboard.js"></script>
    <script src="//cdn.bootcss.com/layer/3.1.0/layer.js"></script>
    <script src="./Assets/js/main.js?<?php echo date('H',time()); ?>"></script>
    <script src="//v1.hitokoto.cn/?c=b&encode=js&select=%23hitokoto" defer></script>
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
    <center>© <?php echo date("Y", time()); ?> <font color="red"><span class="glyphicon glyphicon-heart"></span></font> <?php echo $copy; ?></center>
    <br>
    <div id="circle" style="opacity: 1;"></div>
    <div id="circletext" style="opacity: 1;"></div>
    <div id="circle1" style="opacity: 1;"></div>
</body>
</html>