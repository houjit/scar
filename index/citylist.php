<?php
/*
 本软件版权归作者所有,在投入使用之前注意获取许可
 作者：北京市普艾斯科技有限公司
 项目：simcms_锐车1.0高级版
 电话：010-58480317
 Q  Q：228971357
 网址：http://www.simcms.net
 simcms.net保留全部权力，受相关法律和国际		  		
 公约保护，请勿非法修改、转载、散播，或用于其他赢利行为，并请勿删除版权声明。
*/
if (!defined('APP_IN')) exit('Access Denied');

if($settings['version']==3){
	// 城市选择
	if (!empty($_COOKIE['city'])) {
		$citydata = $db -> row_select_one('area', "id='" . $_COOKIE['city'] . "'", 'parentid');
		$select_province = select_make($citydata['parentid'], $commoncache['provincelist'], "请选择省份");
		$array_city = arr_city($citydata['parentid']);
		$select_city = select_make($_COOKIE['city'], $array_city, "请选择城市");
	} else {
		$array_city = array();
		$select_province = select_make('', $commoncache['provincelist'], "请选择省份");
		$select_city = select_make('', $array_city, "请选择城市");
	} 
	$tpl -> assign('selectprovince', $select_province);
	$tpl -> assign('selectcity', $select_city);
}

//推荐城市
$recomcitylist = $db -> row_select('area','isrecom=1');
$tpl -> assign('recomcity', $recomcitylist);

//所有城市列表
$list = $db->row_select('area','parentid=-1');
foreach($list as $key => $value){
	$citylist = $db -> row_select('area','parentid='.$value['id']);
	$list[$key]['citylist'] = $citylist;
}

$tpl->assign( 'arealist', $list );
$tpl -> display('default/'.$settings['templates'].'/city.html');
?>