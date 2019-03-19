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

$data = $db->row_select('settings',"k='version'");
$version=$data[0]['v'];
$tpl -> assign('version', $version);

$tpl -> assign('menustate', 6);
if($_SESSION[USER_ID])
{
	$tpl -> assign('session', $_SESSION);
	
}

if(submitcheck('tablename'))
{
	$post[loan_amount]=$_POST[loan_amount];
	$post[detail]=$_POST[detail];
	$post[times]=time();
	$post[uid]=$_SESSION[USER_ID];
	$db -> row_insert('loan',$post);
	showmsg('您的信息已提交成功！', -1);
}
else
{	
	$tpl -> display('default/' . $settings['templates'] . '/insurance.html');
}

?>