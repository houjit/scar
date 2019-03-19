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

if(isset($_GET['cid'])){
	setMyCookie("city", intval($_GET['cid']), time()+COOKIETIME );
	header("location:index.php");
	exit;
}
//设置城市cookies
if(empty($_COOKIE['city']) or $_COOKIE['city']=="undefined"){
	$ip = getIp();
	$cityname = get_cityname($ip);
	if(empty($cityname) or $cityname=="I"){
		$cityname="<a href='index.php?m=citylist'>全国</a>";
		$cityid = 0;
	}else{
		$citydata = $db->row_select_one('area',"name='".$cityname."'",'id');
		if(!empty($citydata['id'])){
			$cityid = $citydata['id'];
		}
		else{
			$cityid = 0;
		}
	}
	setMyCookie("city", $cityid, time()+COOKIETIME);
}
else{
	$citydata = $db->row_select_one('area',"id='".$_COOKIE['city']."'",'name');
	$cityname = "<a href='index.php?m=citylist'>".$citydata['name']."</a>";
}

echo "document.write(\"".$cityname."\");";
?>