<?php
/**
 * Created by PhpStorm.
 * User: 烟雨寒云
 * Date: 2018/11/6
 * Time: 14:11
 */

error_reporting(0);
date_default_timezone_set("PRC");
include 'Config.php';
if (!$_COOKIE["yyhy_img"]) {
    setcookie("yyhy_img", md5(time()), time() + 3600 * 24);
    $msg = '<script type="text/javascript">layer.alert("' . $gg . '", {closeBtn: 0,maxWidth: 320,title: "温馨提示 ♪(･ω･)ﾉ",btn: ["知道了"]});</script>';
}