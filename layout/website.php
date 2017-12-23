<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 12/17/17
 * Time: 10:52 PM
 */
include($baseDir.'element/header.php');
$nav = array_key_exists('nav', $_GET)?$_GET['nav']:false;
switch($nav){
    case 'wechat':
        $title = '微信';
        break;
    case 'website':
        $title = '网站';
        break;
    case 'system':
        $title = '业务系统';
        break;
    default:
        $title = '网站';
        break;
}
?>
    <div id="particles-js"></div>
    <div id="header">
        <?php include($baseDir.'element/nav.php');?>
    </div>

    <div class="container">
        <?php if($nav && file_exists($baseDir.'pages/'.$nav.'.php'))include($baseDir.'pages/'.$nav.'.php');?>
    </div>

    <!-- /#wrapper -->
    <script type="text/javascript">
    </script>

<?php include($baseDir.'element/footer.php');?>