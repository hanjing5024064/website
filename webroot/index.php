<?php
require '../config/config.php';
require $baseDir.'vendor/autoload.php';

include $baseDir.'lib/Nav.php';

$newNev = new Nav($layout);
$indexPage = $newNev->run();
require_once $baseDir.$indexPage;