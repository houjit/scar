<?php
/*
 本软件版权归作者所有,在投入使用之前注意获取许可
 作者：北京市普艾斯科技有限公司
 项目：simcms_锐车1.0
 电话：010-58480317
 Q  Q: 228971357
 网址：http://www.simcms.net
 simcms.net保留全部权力，受相关法律和国际公约保护，请勿非法修改、转载、散播，或用于其他赢利行为，并请勿删除版权声明。
*/
if (!defined('APP_IN')) exit('Access Denied');

$tpl -> assign('menustate', 14);

if(!isset($_COOKIE['city']) or empty($_COOKIE['city'])){
	$_COOKIE['city'] = 0;
}

//推荐商家
$tpl->assign( 'comdealer', get_comshop($_COOKIE['city']) );

$array_dealer_category = arr_dealer_category();
$tpl -> assign('dealer_category', $array_dealer_category);

$where = "isdealer=2 and ischeck=1";

if(!empty($_GET['s'])){
	$tpl -> assign('shoptype', intval($_GET['s']));
	$where .= " and shoptype=".intval($_GET['s']);
}

if($_COOKIE['city']!=0){
	$where .= " and cid=".$_COOKIE['city'];
}

include(INC_DIR . 'Page.class.php');
$Page = new Page($db -> tb_prefix . 'member', $where, '*', '20', 'id desc');
$listnum = $Page -> total_num;
$list = $Page -> get_data();
$button_basic = $Page -> button_basic();
$button_select = $Page -> button_select();

$tpl -> assign('button_basic', $button_basic);
$tpl -> assign('button_select', $button_select);
$tpl -> assign('dealerlist', $list); 

$tpl -> display('default/' . $settings['templates'] . '/dealer.html');
?>