<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 12/21/17
 * Time: 9:03 PM
 */
class Util{
    //是否微信浏览器访问
    static public function isWeChat(){
        //判断是否微信访问
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
            return true;
        }else return false;
    }
}