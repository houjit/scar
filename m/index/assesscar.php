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

if (submitcheck('action')) {

	$arr_not_empty = array('brand' => '请选择品牌', 'subbrand' => '请选择子品牌', 'year' => '请选择上牌年份', 'month' => '请选择上牌月份','kilometre' => '请填写行驶里程', 'p_tel' => '请填写手机号');

	can_not_be_empty($arr_not_empty, $_POST);
	
	$post = post('brand','subbrand','p_tel','year','month','kilometre');

	$post['p_allname'] = $commoncache['brandlist'][$post['brand']].$commoncache['subbrandlist'][$post['subbrand']];
	$post['p_brand'] = intval($post['brand']);
	$post['p_subbrand'] = intval($post['subbrand']);
	$post['p_year'] = trim($post['year']);
	$post['p_month'] = trim($post['month']);
	$post['p_kilometre'] = trim($post['kilometre']);
	$post['p_contact_tel'] = trim($post['p_tel']);

	$post['p_addtime'] = TIMESTAMP;
	unset($post['brand']);
	unset($post['subbrand']);
	unset($post['year']);
	unset($post['month']);
	unset($post['kilometre']);
	unset($post['p_tel']);

	$db -> row_insert('assesscars', $post);

	mshowmsg('恭喜您，评估登记成功！', -1);
} 

$tpl -> display('m/assesscar.html');
?>