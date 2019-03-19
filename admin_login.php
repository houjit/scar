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

include('common.inc.php');
include(INC_DIR.'permission.func.php');
include(INC_DIR . 'html.func.php');
include ('index/page.php');

$m = isset($_GET['m']) ? $_GET['m'] : 'main';
if (!is_admin_login()) $m = 'login';
if (!file_exists('admin/'.$m.'.php')) exit('error url');
permission_chk();
include('admin/'.$m.'.php');
?>