<?php
// 错误报告
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 虚拟主机配置
define('URL_HOST', parse_url('//' . $_SERVER['HTTP_HOST'], PHP_URL_HOST));
$_VHOSTS = [
	'' => 'index.htm',
	'192.168.99.100' => 'index.htm',
	'api.lan.urlnk.com' => '../work/api/web/index.php',
	'lan.urlnk.com' => '/www/work/urlnk/web/index.php',
	'lan.cpn.red' => '/www/work/coupon/web/index.php',
];

// 包含入口文件
if (array_key_exists(URL_HOST, $_VHOSTS) && @include $_VHOSTS[URL_HOST]) {
	//
} else {
	# echo URL_HOST;
	include $_VHOSTS[''];
}
