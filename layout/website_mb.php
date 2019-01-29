<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 12/17/17
 * Time: 10:52 PM
 */
include($baseDir . 'element/header.php');

//如果微信访问，增加分享配置
include $baseDir.'lib/Util.php';
if(Util::isWeChat())include $baseDir.'lib/wechat.php';

$newNev = new Nav();
$newNev->run();

$nav = array_key_exists('nav', $_GET) ? $_GET['nav'] : 'index';
switch ($nav) {
    case 'wechat':
        $title = '微信';
        break;
    case 'website':
        $title = '网站';
        break;
    case 'system':
        $title = '业务系统';
        break;
    case 'index':
        $title = '首页';
        break;
    default:
        $title = '首页';
        break;
}
?>

<div class="container">
    <div id="particles-js"></div>

    <div class="row align-items-center">
        <div class="col-12 align-self-center header" id="header">
            <?php include($baseDir . 'element/nav.php'); ?>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-12 align-self-center content">
            <?php if ($nav && file_exists($baseDir . 'pages/' . $nav . '.php')) include($baseDir . 'pages/' . $nav . '.php'); ?>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-12 align-self-center footer">
            <?php include($baseDir . 'element/footer.php'); ?>
        </div>
    </div>
</div>