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

//最新车源
$list = $db -> row_select('cars', 'issell=0 and isshow=1', '*', '20', 'listtime');
foreach($list as $key => $value) { 
	if (!empty($value['p_mainpic'])) {
		$pic = explode(".", $value['p_mainpic']);
		$list[$key]['p_mainpic'] = WEB_DOMAIN."/".$pic[0] . "_small" . "." . $pic[1];
	} 
	$list[$key]['p_shortname'] = _substr($value['p_allname'], 0, 20);
	$list[$key]['p_shortname2'] = _substr($value['p_allname'], 0, 30);
	$list[$key]['listtime'] = date('Y-m-d', $value['listtime']);
	$list[$key]['p_details'] = _substr($value['p_details'], 0, 80);
	$list[$key]['p_price'] = intval($value['p_price']) == 0 ? "面谈" : "￥" . $value['p_price'] . "万"; 
	$list[$key]['p_url'] ="index.php?m=cars&id=".$value['p_id'];
} 
$tpl -> assign('carlist', $list);

$tpl -> display('m/newcar.html');

?>