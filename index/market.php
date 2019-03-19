<?php
/**
 * 本软件版权归作者所有,在投入使用之前注意获取许可
作者：北京市普艾斯科技有限公司
 * 项目：simcms_锐车1.0
 * 电话：010-58480317
 * Q  Q: 228971357
 * 网址：http://www.simcms.net
 * simcms.net保留全部权力，受相关法律和国际公约保护，请勿非法修改、转载、散播，或用于其他赢利行为，并请勿删除版权声明。
 */
if (!defined('APP_IN')) exit('Access Denied');

$tpl -> assign('menustate', 7);

if(!isset($_COOKIE['city']) or empty($_COOKIE['city'])){
	$_COOKIE['city'] = 0;
}

// 幻灯片
$tpl -> assign('filmlist', get_filmstrip(3));

// 新闻
$picnewslist = array();

$picnewslist['1'] = get_picnews(13,12);
$picnewslist['2'] = get_picnews(14,6);

$tpl -> assign('newslist', $picnewslist);

$asklist = get_comnews(15, 3);
$tpl -> assign('asklist', $asklist);

$tpl -> display('default/' . $settings['templates'] . '/market.html');
?>