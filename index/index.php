<?php
/**
 * 本软件版权归作者所有,在投入使用之前注意获取许可
作者：北京市普艾斯科技有限公司
 * 项目：simcms_锐车1.0
 * 电话：010-58480317
 * Q  Q: 228971357
 * 网址：http://www.simcms.net
 * simcms.net保留全部权力，受相关法律和国际公约保护，请勿非法修改、转载、散播，或用于其他赢利行为，并请勿删除版权声明。
 */
if (!defined('APP_IN')) exit('Access Denied');

$tpl -> assign('menustate', 1);

if(!isset($_COOKIE['city']) or empty($_COOKIE['city'])){
	$_COOKIE['city'] = 0;
}

//公告
$tpl -> assign('noticelist', get_comnews(8, 4));

// 幻灯片
$tpl -> assign('filmlist', get_filmstrip(1));

//推荐品牌
$recombrand = get_brand_recom();

foreach($recombrand as $key => $value){
	$recombrand[$key]['carlist'] = get_carlist($_COOKIE['city'],"p_brand=".$value['b_id']." and issell=0 and p_mainpic!='' and isshow=1", '10', 'listtime desc');
}

$tpl -> assign('recombrandlist', $recombrand);



$carlist = array();

//特荐车源
$carlist['todaycar'] = get_todaycar($_COOKIE['city']);



if($settings['version']==2 or $settings['version']==3){

	//商家推荐二手车
	$carlist['sjcar'] = get_carlist($_COOKIE['city'],"isrecom=1 and issell=0 and isshow=1 and uid in( select id from " . $db_config['TB_PREFIX'] . "member where isdealer=2)", '8', 'listtime desc');

	//个人推荐二手车
	$carlist['grcar'] = get_carlist($_COOKIE['city'],"isrecom=1 and issell=0  and isshow=1 and (uid in( select id from " . $db_config['TB_PREFIX'] . "member where isdealer=1) or uid=0)", '8', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 

	// 推荐商家
	$tpl -> assign('comdealer', get_comshop($_COOKIE['city']));

	// 热门商家
	$tpl -> assign('hotdealer', get_hotshop($_COOKIE['city'])); 
}
else{
	//个人推荐二手车
	$carlist['grcar'] = get_carlist($_COOKIE['city'],"isrecom=1 and issell=0 and p_mainpic!='' and isshow=1", '8', 'listtime desc');
}

$tpl -> assign('car_list', $carlist); 

// 新闻
$newslist = array();
$picnewslist = array();
$picnewslist['1'] = get_picnews(1,2);
$picnewslist['2'] = get_picnews(2,2);
$picnewslist['3'] = get_picnews(3,2);
$picnewslist['4'] = get_picnews(4,2);
$newslist['1'] = get_comnews(1, 8);
$newslist['2'] = get_comnews(2, 8);
$newslist['3'] = get_comnews(3, 8);
$newslist['4'] = get_comnews(4, 8);
$newslist['5'] = get_comnews(12, 3);
$tpl -> assign('picnewslist', $picnewslist); 
$tpl -> assign('newslist', $newslist);
$tpl -> assign('newslist', $newslist);



// 公告
$notice = get_comnews(5, 4);
$tpl -> assign('noticelist', $notice);

//友情链接
$tpl -> assign('link_list', get_flink()); 

// 热门关键词
$tpl -> assign('hotkeywordlist', get_bottomkeywords());

$tpl -> display('default/' . $settings['templates'] . '/index.html');

?>