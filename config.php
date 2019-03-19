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
$db_config['DB_HOST'] = 'localhost'; //数据库地址
$db_config['DB_USER'] = 'scar_houapi_com'; //mysql帐号
$db_config['DB_PASS'] = 'ZimKk35R7hidXZfP'; //mysql密码
$db_config['DB_NAME'] = 'scar_houapi_com'; //数据库名称
$db_config['DB_CHARSET'] = 'utf8';  //数据库编码
$db_config['DB_ERROR'] = true;
$db_config['TB_PREFIX'] = 'simcms_';//数据表前缀

define('CHARSET', 'utf-8'); //文件编码
define('TIMEZONE', '-8'); //时区设置
define('INC_DIR', 'include/'); //包含目录
define('TPL_DIR', 'templates/'); //模板目录
define('HTML_DIR', ''); //静态文件目录
define('CACHETIME',3600); //缓存时间
define('COOKIETIME',3600); //缓存时间
define('ADMIN_PAGE', 'admin_login.php'); //后台入口文件
?>