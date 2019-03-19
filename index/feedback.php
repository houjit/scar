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

$tpl -> assign('menustate', 10);

if (submitcheck('action')) {

	$arr_not_empty = array('f_username' => '请填写姓名', 'f_tel' => '请填写手机号', 'f_detail' => '请填写留言');

	can_not_be_empty($arr_not_empty, $_POST); 

	$post = post('f_username','f_tel','f_detail');
	$post['f_username'] = trim($post['f_username']);
	$post['f_tel'] = trim($post['f_tel']);
	$post['f_detail'] = htmlspecialchars(trim($post['f_detail']));

	$post['f_addtime'] = TIMESTAMP;

	$db -> row_insert('feedback', $post);

	showmsg('您的留言已提交成功！', -1);
}
?>