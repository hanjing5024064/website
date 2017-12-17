<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 12/17/17
 * Time: 10:52 PM
 */
include('element/header.php');
$nav = array_key_exists('nav', $_GET)?$_GET['nav']:'website';
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

    <div id="header">
        <?php include('element/nav.php');?>
    </div>

    <div class="container">
        <?php include($nav.'.php');?>
    </div>

    <!-- /#wrapper -->
    <script type="text/javascript">
    </script>

<?php include('element/footer.php');?>