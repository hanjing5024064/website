<?php
require '../config/config.php';
require $baseDir.'vendor/autoload.php';
include $baseDir.'layout/website.php';
include $baseDir.'lib/Util.php';
if(Util::isWeChat())include $baseDir.'lib/wechat.php';