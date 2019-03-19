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

$settings  = settings();
$tpl->assign( 'setting', $settings );

//读取缓存
$tpl -> assign('cache', $commoncache);

$select_year = select_make('', $commoncache['yearlist'], '请选择年份');
$select_month = select_make('', array('01' => '01月', '02' => '02月', '03' => '03月', '04' => '04月', '05' => '05月', '06' => '06月', '07' => '07月', '08' => '08月', '09' => '09月', '10' => '10月', '11' => '11月', '12' => '12月'), '请选择月份', '');
$tpl -> assign('select_year', $select_year);
$tpl -> assign('select_month', $select_month);

$tpl->assign( 'webdomain', WEB_DOMAIN );
?>