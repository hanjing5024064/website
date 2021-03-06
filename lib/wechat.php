<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 12/19/17
 * Time: 9:51 PM
 */
use EasyWeChat\Factory;

$config = [
    'app_id' => $appid,
    'secret' => $secret,

    // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
    'response_type' => 'array',

    'log' => [
        'level' => 'debug',
        'file' => '../logs/wechat.log',
    ],
];

$app = Factory::officialAccount($config);

$APIs = [
    'onMenuShareAppMessage', //发送给朋友
    'onMenuShareTimeline',   //分享到朋友圈
    'onMenuShareQQ',         //发送给qq好友
    'onMenuShareWeibo',      //分享到微博
    'onMenuShareQZone'       //分享到qq空间
];
//$jssdkJson = $app->jssdk->buildConfig($APIs, $debug = false, $beta = false, $json = true);
?>
<?php $jssdkConfig = $app->jssdk->buildConfig($APIs, false, false, true) ?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    wx.config(<?php echo $jssdkConfig;?>);

//    wx.checkJsApi({
//        jsApiList: ['onMenuShareAppMessage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
//        success: function(res) {
//            alert('success');
//        }
//    });

    wx.ready(function() {
        wx.onMenuShareAppMessage({
            title: '<?php echo $shareTitle;?>', // 分享标题
            desc: '<?php echo $shareDesc;?>', // 分享描述
            link: '<?php echo $shareLink;?>', // 分享链接，该链接域名必须与当前企业的可信域名一致
            imgUrl: '<?php echo $shareImg;?>', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });

        wx.onMenuShareTimeline({
            title: '<?php echo $shareTitle;?>', // 分享标题
            link: '<?php echo $shareLink;?>', // 分享链接，该链接域名必须与当前企业的可信域名一致
            imgUrl: '<?php echo $shareImg;?>', // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
    });
</script>