<?php /* Smarty version 2.6.18, created on 2016-10-31 10:17:29
         compiled from default/default/index.html */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/index.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" type="image/ico" href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/img/favicon.ico">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script><script type="text/javascript">uaredirect("<?php echo $this->_tpl_vars['weburl']; ?>
/m");</script>

<script language="JavaScript">
			$(function() {
				//品牌选择
				$("#brand").change(function(){
					$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
						brandid :  $("#brand").val() 
					}, function (data, textStatus){
						   $("#subbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});

				//品牌选择
				$("#subbrand").change(function(){
					$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
						subbrandid :  $("#subbrand").val() 
					}, function (data, textStatus){
						   $("#subsubbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});
				
				$div_li = $("div.tab_title ul li a");
				$div_li.click(function() {
					$(this).addClass("current").parent().siblings().children().removeClass("current");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});

				$search_li = $("div.leftsearch_tab ul li");
				$search_li.click(function() {
					$(this).addClass("here").siblings().removeClass("here");
					var index = $search_li.index(this);
					$("div.leftsearch_tab_box > div").eq(index).show().siblings().hide();
				});

				//表单验证
				$(".carform").Validform({
					tiptype:1
				});
				//热门车源
				$("#hotcar1").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&cartype=indexhot");
				//首页推荐新车
				$("#hotcar").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&cartype=indexnew");
				//首页推荐新车旧卖
				//$("#hotcar").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&cartype=recommend");
				
				
				//修改处  nav
				
				$(".leftsearch .leftsearchbox:eq(0)").mouseover(function(){
																		 
					$("#icon_03").css("background-position","-278px -47px");	
					$("#icon_02").css("background-position","-278px 0px");
					$("#icon_04").css("background-position","-0px -219px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");	
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");	
					$(".rightad").hide();
					$(".leftsearch .leftsearchbox").css("background","#fff");
									
					$(".leftsearch .leftsearchbox:eq(0)").css("background","#fc5300");
					$("#icon_01").css("background-position","-94px -266px");										   
					$(".leftsearch .leftsearchbox:eq(0) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(0)").css("color","#fff");
					$(".triangle:eq(0)").hide();
					$(".rightad:eq(0)").show();
				});				
				
				$(".leftsearch .leftsearchbox:eq(1)").mouseover(function(){
																		 
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_03").css("background-position","-278px -47px");
					$("#icon_04").css("background-position","-0px -219px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");					
					$(".rightad").hide();	
					$(".leftsearch .leftsearchbox").css("background","#fff");
					
					$(".leftsearch .leftsearchbox:eq(1)").css("background","#fc5300");
					$("#icon_02").css("background-position","-188px -219px");
					$(".leftsearch .leftsearchbox:eq(1) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(1)").css("color","#fff");
					$(".triangle:eq(1)").hide();
					$(".rightad:eq(1)").show();
				});
				
				$(".leftsearch .leftsearchbox:eq(2)").mouseover(function(){
																		 
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_02").css("background-position","-278px 0px");
					$("#icon_04").css("background-position","-0px -219px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");					
					$(".rightad").hide();	
					$(".leftsearch .leftsearchbox").css("background","#fff");
					
					$(".leftsearch .leftsearchbox:eq(2)").css("background","#fc5300");
					$("#icon_03").css("background-position","-278px -94px");										   
					$(".leftsearch .leftsearchbox:eq(2) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(2)").css("color","#fff");
					$(".triangle:eq(2)").hide();
					$(".rightad:eq(2)").show();
				});
				
				$(".leftsearch .leftsearchbox:eq(3)").mouseover(function(){
																		 
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_02").css("background-position","-278px 0px");
					$("#icon_03").css("background-position","-278px -47px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");	
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");					
					$(".rightad").hide();	
					$(".leftsearch .leftsearchbox").css("background","#fff");
					
					$(".leftsearch .leftsearchbox:eq(3)").css("background","#fc5300");
					$("#icon_04").css("background-position","-141px -219px");										   
					$(".leftsearch .leftsearchbox:eq(3) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(3)").css("color","#fff");
					$(".triangle:eq(3)").hide();
					$(".rightad:eq(3)").show();
				});

				$(".leftsearch .leftsearchbox").mouseleave(function(){													 
					$(".rightad").hide();
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_02").css("background-position","-278px 0");	
					$("#icon_03").css("background-position","-278px -47px");	
					$("#icon_04").css("background-position","0 -219px");	
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");	
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");	
					$(".leftsearch .leftsearchbox").css("background","#fff");
				});

				//修改处  商家/个人推荐二手车
				
				$(".tjdealer").slide({mainCell:".piclist", effect:"leftLoop",vis:5,autoPlay:true});

				
			})
			
			//代言宝
			$(function() {
                var div = document.createElement("div");
                
                div.setAttribute("id", "daiyanbao_com_content");
                div.style.cssText = "position: fixed;_position: absolute;text-align: left;overflow: visible;bottom :0;right:0;display:block; z-index:999;";
                document.body.appendChild(div);

                var sc = document.createElement("script");
                sc.src = "http://res.daiyanbao.com/freevideojs/304/1/<?php echo $this->_tpl_vars['setting']['tel']; ?>
.js";
                document.body.appendChild(sc);
                //document.getElementsByTagName["head"][0].appendChild(sc);
            });
		</script>
</head>
<body>
<!--内容-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--代言宝-->
<div id="daiyanbao_com_content" closerate="2" playrate="-3" style="position: fixed;_position: absolute;text-align: left;overflow: visible;bottom :0;right:0;display:block; z-index:999;">
<script src="//res.daiyanbao.com/freevideojs/304/1/<?php echo $this->_tpl_vars['setting']['tel']; ?>
.js">
</script>
</div>

<div class="fullSlide">
    <div class="leftsearch">
      <div class="leftsearch_tab">
        <ul class="clearfix">
          <!--修改处-->
          <li class="here">快速选车</li>
          <li>快速评估</li>
        </ul>
      </div>
      <div class="leftsearch_tab_box">
        <div>
          <div class="leftsearchbox" >
            <div class="rightad" id="allcarlist">
              <div class="triangle1" style="top:74px;"></div>
              <div class="carlist_left" >
                <h2>全部车辆品牌</h2>
                <ul class="carlist">
                  <li class="carlist_li"><span>A</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_1" >奥迪</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_4" >阿斯顿马丁</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_2" >奥克斯</a> </li>
                  <li class="carlist_li"><span>B</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_7" >宝马</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_16" >别克</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_11" >本田</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_6" >奔驰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_10" >比亚迪</a> </li>
                  <li class="carlist_li"><span>C</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_28" >长安商用</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_27" >长安轿车</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_25" >长城</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_26" >昌河</a> </li>
                  <li class="carlist_li"><span>D</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_29" >大众</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_31" >东南</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_39" >东风小康</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_35" >东风风行</a> </li>
                  <li class="carlist_li"><span>F</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_41" >丰田</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_42" >福特</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_43" >菲亚特</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_47" >福田</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_46" >法拉利</a> </li>
                  <li class="carlist_li"><span>H</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_59" >海马</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_73" >哈弗</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_58" >哈飞</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_60" >华普</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_66" >华泰</a> </li>
                  <li class="carlist_li"><span>J</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_75" >吉利汽车</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_76" >江淮</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_74" >Jeep</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_77" >江铃</a> </li>
                  <li class="carlist_li"><span>K</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_87" >凯迪拉克</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_88" >克莱斯勒</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_89" >开瑞</a> </li>
                  <li class="carlist_li"><span>L</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_101" >路虎</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_93" >铃木</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_99" >雷克萨斯</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_95" >力帆</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_102" >雷诺</a> </li>
                </ul>
                <ul class="carlist">
                  <li class="carlist_li"><span>M</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_108" >马自达</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_111" >MINI</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_110" >MG</a> </li>
                  <li class="carlist_li"><span>O</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_118" >欧宝</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_117" >讴歌</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_119" >欧朗</a> </li>
                  <li class="carlist_li"><span>Q</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_123" >起亚</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_124" >奇瑞</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_126" >启辰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_125" >庆玲</a> </li>
                  <li class="carlist_li"><span>R</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_127" >日产</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_128" >荣威</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_129" >瑞麟</a> </li>
                  <li class="carlist_li"><span>S</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_130" >斯柯达</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_131" >三菱</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_137" >斯巴鲁</a> </li>
                  <li class="carlist_li"><span>W</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_152" >五菱</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_150" >沃尔沃</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_154" >威麟</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_153" >五十铃</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_151" >万丰</a> </li>
                  <li class="carlist_li"><span>X</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_157" >现代</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_158" >雪佛兰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_156" >雪铁龙</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_161" >新凯</a> </li>
                  <li class="carlist_li"><span>Y</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_166" >一汽</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_168" >英菲尼迪</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_164" >依维柯</a> </li>
                  <li class="carlist_li"><span>Z</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_176" >中华</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_179" >众泰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_176" >中兴</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_180" >中欧</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_178" >中顺</a> </li>
                </ul>
              </div>
              <!--<div class="carlist_right">
                <h2>推荐品牌</h2>
                <ul class="list_right">
                  <li class="right_li"> <a class="right_a" href="#" ><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/list1.png" width="80" height="80" /></a> <a class="right_a" href="#" ><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/list2.png" width="80" height="80" /></a> </li>
                  <li class="right_li"> <a class="right_a" href="#" ><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/list1.png" width="80" height="80" /></a> <a class="right_a" href="#" ><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/list2.png" width="80" height="80" /></a> </li>
                  <li class="right_li"> <a class="right_a" href="#" ><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/list1.png" width="80" height="80" /></a> <a class="right_a" href="#" ><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/list2.png" width="80" height="80" /></a> </li>
                </ul>
              </div>
			  -->
            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_01"></span> 按品牌 </div>
            <div class="triangle"></div>
            <div class="clearfix""> <?php $_from = $this->_tpl_vars['recombrandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['brandlist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_<?php echo $this->_tpl_vars['brandlist']['b_id']; ?>
" <?php if ($_COOKIE['brand'] == $this->_tpl_vars['brandlist']['b_id']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['brandlist']['b_name']; ?>
</a><?php endforeach; endif; unset($_from); ?> <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search" class="more">更多<i></i></a> </div>
          </div>
          <div class="leftsearchbox">
            <div class="rightad" id="ad_01">
              <div class="triangle1" style="top:144px;"></div>
              <a class="rightad_center" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad0.jpg" width="562" height="422" /> </a>
              <div class="rightad_right"> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad1.jpg" width="300" height="211" /> </a> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad2.jpg" width="300" height="211" /> </a> </div>
            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_02"></span> 按价格 </div>
            <div class="triangle"></div>
            <div class="clearfix"><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['price'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
          </div>
          <div class="leftsearchbox">
            <div class="rightad" id="ad_02">
              <div class="triangle1" style="top:225px;"></div>
              <a class="rightad_center" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad5.jpg" width="562" height="422" /> </a>
              <div class="rightad_right"> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad3.jpg" width="300" height="211" /> </a> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad4.jpg" width="300" height="211" /> </a> </div>
            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_03"></span> 按车型 </div>
            <div class="triangle"></div>
            <div class="clearfix"><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" ><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
          </div>
          <div class="leftsearchbox" style="height:62px;">
            <div class="rightad" id="ad_03">
              <div class="triangle1" style="top:295px;"></div>
              <a class="rightad_center" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad6.jpg" width="562" height="422" /> </a>
              <div class="rightad_right"> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad2.jpg" width="300" height="211" /> </a> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/ad3.jpg" width="300" height="211" /> </a> </div>
            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_04"></span> 按车龄 </div>
            <div class="triangle"></div>
            <div class="clearfix"><?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" ><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
          </div>
          <div class="other"> <i></i>
            <p class="tel"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</p>
            <p class="info">8:30-17:00（工作时间）</p>
          </div>
        </div>
        <div class="hide pb20">
          <form name="carform" class="carform" method="post" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=assesscar">
            <table cellspacing="0" cellpadding="0" width="100%"  class="sell_table" id="quickassess">
              <tr>
                <th> 品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌：</th>
                <td colspan="3"><select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！" class="select01">
                    <?php echo $this->_tpl_vars['selectbrand']; ?>

                  </select></td>
              </tr>
              <tr>
                <th> 车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系：</th>
                <td><select id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！" class="select01">
                    <option value="" selected>请选择车系</option>
                  </select></td>
              </tr>
              <tr>
                <th> 车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：</th>
                <td><select id="subsubbrand" name="p_subsubbrand" datatype="n" nullmsg="请选择款式！" class="select01">
                    <option value="" selected>请选择款式</option>
                  </select></td>
              </tr>
              <tr>
                <th>上牌日期：</th>
                <td><select name="p_year" datatype="n" nullmsg="请选择年份！" class="select02">
                    <?php echo $this->_tpl_vars['select_year']; ?>

                  </select>
                  <select name="p_month" datatype="n" nullmsg="请选择月份！" class="select02">
                    <?php echo $this->_tpl_vars['select_month']; ?>

                  </select></td>
                </td>
              </tr>
              <tr>
                <th>行驶里程：</th>
                <td><input name="p_kilometre" type="text" id="p_kilometre" size="15" />
                  <span class="gray">(万公里)</span></td>
                </td>
              </tr>
              <tr>
                <th>手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</th>
                <td><input name="p_contact_tel" type="text" size="30" class="inp01" value="" datatype="m" nullmsg="请填写手机号！"/></td>
              </tr>
              <tr>
                <th>验&nbsp;&nbsp;证&nbsp;&nbsp;码：</th>
                <td colspan="5"><input name="authcode" id="cftcode" size="10"  type="text"  class="inp02" datatype="s" ajaxurl="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/>
                  <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="70" height="30" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码" style="cursor:pointer" id="checkcode" align="absmiddle"></td>
              </tr>
              <tr>
                <th></th>
                <td><input type="submit" value="立即评估" class="sell_but02">
                  <input type="hidden" name="action" value="sellcar"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
	<div class="small-banner">
        <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=citylist" target="_blank" class="banner-item"><span class="icon icon-1"></span><p class="f20">全国最优</p><p>精选城市优质商家</p></a>
            <b class="banner-divider"></b>
        <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search" target="_blank" class="banner-item" ><span class="icon icon-2"></span><p class="f20">诚信为本</p><p>杜绝劣质车源</p></a>
            <b class="banner-divider"></b>
        <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=assesscar" target="_blank" class="banner-item last">
                <span class="icon icon-3"></span><p class="f20">车价评估</p><p>免费评估车辆价格</p>
        </a>            
    </div>
    
    <div class="bd">
      <ul>
        <?php $_from = $this->_tpl_vars['filmlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['film_list']):
?>
        <li _src="url(<?php echo $this->_tpl_vars['film_list']['pic']; ?>
)" style="background:#fc5300 center 0 no-repeat;"><a target="_blank" href="<?php echo $this->_tpl_vars['film_list']['url']; ?>
"></a></li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
    <div class="hd">
      <ul>
      </ul>
    </div>
    <span class="prev"></span> <span class="next"></span> </div>
</div>
<script type="text/javascript">
/* 控制左右按钮显示 */
jQuery(".fullSlide").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
/* 调用SuperSlide */
jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
	startFun:function(i){
		var curLi = jQuery(".fullSlide .bd li").eq(i); /* 当前大图的li */
		if( !!curLi.attr("_src") ){
			curLi.css("background-image",curLi.attr("_src")).removeAttr("_src") /* 将_src地址赋予li背景，然后删除_src */
		}
	}
});
</script>
<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
<div class="main mt20 clearfix" id="hot_brands">
  <div class="tab_title">
    <ul class="clearfix">
      <li class="js-title"> <a style="line-height:76px;cursor:pointer;color: #ff6600;font-weight: bold;font-size: 20px;" class="current">最新车源</a> </li>
      <?php $_from = $this->_tpl_vars['recombrandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recombrand']):
?>
      <li class="js-title"> <a  href="javascript:;"><img src="upload/brand/<?php echo $this->_tpl_vars['recombrand']['pic']; ?>
" alt="<?php echo $this->_tpl_vars['recombrand']['b_name']; ?>
"><?php echo $this->_tpl_vars['recombrand']['b_name']; ?>
</a> </li>
      <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  <div class="cartab_box">
    <div class="box">
      <ul id="hotcar" class="bigcarlist clearfix">
      </ul>
	  <div class="carmore"><a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search">查看更多汽车<i></i></a></div>
    </div>
    <?php $_from = $this->_tpl_vars['recombrandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recombrand']):
?>
    <div class="box hide">
      <ul class="bigcarlist clearfix">
        <?php $_from = $this->_tpl_vars['recombrand']['carlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['grcarlist']):
?> <li class="bbgspe"> <a href="<?php echo $this->_tpl_vars['grcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['grcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['grcarlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['grcarlist']['p_allname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
        <p class="carname mt5"><a href="<?php echo $this->_tpl_vars['grcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['grcarlist']['p_allname']; ?>
</a></p>
        <p><span class="price"><?php echo $this->_tpl_vars['grcarlist']['p_price']; ?>
</span> <?php if ($this->_tpl_vars['grcarlist']['p_price'] <> "面议"): ?>万<?php endif; ?></p>
        <p class="gray01 mt5 f12"><span class="fr">里程：<?php echo $this->_tpl_vars['grcarlist']['p_kilometre']; ?>
万公里</span>上牌：<?php echo $this->_tpl_vars['grcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['grcarlist']['p_month']; ?>
月</p>
        </li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
      <div class="carmore"><a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&c=b_<?php echo $this->_tpl_vars['recombrand']['b_id']; ?>
">查看更多<strong><?php echo $this->_tpl_vars['recombrand']['b_name']; ?>
</strong>汽车<i></i></a></div>
    </div>
    <?php endforeach; endif; unset($_from); ?> </div>
</div>
<div class="main mt10">
  <script language="javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ad&id=54"></script>
</div>
<div class="main clearfix mt15">
  <div class="main_left">
    <div class="hotdealer" style="padding:0;background:#fff;">
      <h3 id="hottitle"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=dealer" class="more">更多车商</a>热门二手车经销商</h3>
      <div class="tjdealer">
        <div class="ohbox">
          <ul class="piclist">
            <?php $_from = $this->_tpl_vars['comdealer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comdealerlist']):
?>
            <li class="clearfix" style="margin:6px 10px 0px 6px;padding:8px;" > <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['comdealerlist']['id']; ?>
" target="_blank" style="">
              <div class="img"><?php if ($this->_tpl_vars['comdealerlist']['logo'] <> ''): ?><img src="<?php echo $this->_tpl_vars['comdealerlist']['logo']; ?>
" class="vt"><?php else: ?>
                <div class="noimg">暂无图片</div>
                <?php endif; ?> <span class="gray01" style="color:#666;padding-top:5px;"><?php echo $this->_tpl_vars['comdealerlist']['company_short']; ?>
</span>
                <!--<span class="gray01"><?php echo $this->_tpl_vars['comdealerlist']['mobilephone']; ?>
</span>-->
                <span class="gray01">在售：<span class="fb orange01" style="display:inline"><?php echo $this->_tpl_vars['comdealerlist']['carcount']; ?>
</span> 辆</span> </a> </div>
            </li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
        <div class="pageBtn"> <span class="prev"><</span> <span class="next">></span> </div>
      </div>
    </div>
    <div class="index_left01">
      <ul class="indexnews_tab clearfix">
        <li class="here">商家推荐二手车</li>
      </ul>
      <div class="indexnews_box">
        <div class="clearfix">
          <ul class="smallcarlist clearfix">
            <?php $_from = $this->_tpl_vars['car_list']['sjcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recomcarlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['recomcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['recomcarlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
</a><span class="fr pt5"><span class="check01" title="商家车源"></span></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['recomcarlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['recomcarlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['recomcarlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['recomcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['recomcarlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
    </div>
	<div class="index_left01">
      <ul class="indexnews_tab clearfix">
        <li class="here">个人推荐二手车</li>
      </ul>
      <div class="indexnews_box">
        <div class="clearfix">
          <ul class="smallcarlist clearfix">
            <?php $_from = $this->_tpl_vars['car_list']['grcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['grcarlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['grcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['grcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['grcarlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['grcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['grcarlist']['p_shortname']; ?>
</a><span class="fr pt5"><span class="check02" title="个人车源"></span></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['grcarlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['grcarlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['grcarlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['grcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['grcarlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      
      <div>
      	<?php $_from = $this->_tpl_vars['hotcategory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['temp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['temp']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['hotpic']):
        $this->_foreach['temp']['iteration']++;
?>
        <?php if (($this->_foreach['temp']['iteration']-1) < 4): ?>  
        	<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['hotpic']['uid']; ?>
&a=news&nid=<?php echo $this->_tpl_vars['hotpic']['n_id']; ?>
" target="_blank" >    
      		<img src="<?php echo $this->_tpl_vars['hotpic']['n_pic']; ?>
" width="234" height="210" /></a>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
      </div>
      
    </div>
	</div>
  	<div class="index_right">
		<div class="activityBox">
			<div class="title">
				<h2>特荐车源</h2>
				<span class="prev"></span>
				<span class="next"></span>
			</div>
			<div class="content">
				<span class="leftZone"></span>
				<div class="contentInner">
					<ul>
						<?php $_from = $this->_tpl_vars['car_list']['todaycar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['todaycarlist']):
?>
						<li>
							<a href="<?php echo $this->_tpl_vars['todaycarlist']['p_url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['todaycarlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/></a>
							<p class="carname mt10"><a href="<?php echo $this->_tpl_vars['todaycarlist']['p_url']; ?>
" class="f14"><?php echo $this->_tpl_vars['todaycarlist']['p_allname']; ?>
</a></p>
							<p class="mt5"><span class="f16 orange01"><?php echo $this->_tpl_vars['todaycarlist']['p_price']; ?>
</span></p>
							<p class="mt5 gray01"><?php echo $this->_tpl_vars['todaycarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['todaycarlist']['p_month']; ?>
月上牌</p>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<span class="rightZone"></span>
			</div>
		</div>
		<script type="text/javascript">jQuery(".activityBox").slide({ mainCell:".contentInner ul", effect:"top",delayTime:400});</script>
		<div class="commonbox01 mt10">
		<h3><span>热门商家</span></h3>
            
            <div class="indexhotcarlist box">	               
            <?php $_from = $this->_tpl_vars['hotdealer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['temp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['temp']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['hotfour']):
        $this->_foreach['temp']['iteration']++;
?>
              <div  style="overflow:hidden;"> 
                             
                <?php if (($this->_foreach['temp']['iteration']-1) < 3): ?>
                <span class="num01">
            	
                <?php echo $this->_foreach['temp']['iteration']; ?>

                
   				</span>
                <?php endif; ?>
                
                <?php if (($this->_foreach['temp']['iteration']-1) > 2): ?>
                <span class="num02">
                
                <?php echo $this->_foreach['temp']['iteration']; ?>

                
   				</span>
                <?php endif; ?>
                
                <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=shop&id=<?php echo $this->_tpl_vars['hotfour']['id']; ?>
" target="_blank" class="fl pl5 fours">
              		<div class="img">
                    	<?php if ($this->_tpl_vars['hotfour']['logo'] <> ''): ?>
                    	<img src="<?php echo $this->_tpl_vars['hotfour']['logo']; ?>
" class="vt">
                    	<?php else: ?>
                		<div class="noimg">暂无图片</div>
                		<?php endif; ?> 
                    	<?php echo $this->_tpl_vars['hotfour']['company_short']; ?>

                    </div>
                </a>
                      	
              </div>
            <?php endforeach; endif; unset($_from); ?>           
        	</div>

		</div>
		<div class="commonbox02 mt10">
       			  <h3>热门车源排行</h3>
		  <div class="box">
			<div id="hotcar1" class="indexhotcarlist"></div>
		  </div>
        	
        </div>
        
   </div>
</div>
<?php endif; ?>

<div class="main mt15 clearfix">
  <div class="index_left02">
    <ul class="indexnews_tab clearfix">
      <li class="here">网站动态</li>
      <li>用车护车</li>
      <li>二手车选购</li>
      <li>二手车专题</li>
    </ul>
    <div class="indexnews_box">
      <div class="clearfix">
        <div class="box_left"> <?php $_from = $this->_tpl_vars['picnewslist']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picnewslist1']):
?>
          <div class="picnewslist clearfix">
            <div class="img"><img src="<?php echo $this->_tpl_vars['picnewslist1']['n_pic']; ?>
"></div>
            <div class="info">
              <p><a href="<?php echo $this->_tpl_vars['picnewslist1']['n_url']; ?>
" class="f14 fb"><?php echo $this->_tpl_vars['picnewslist1']['shorttitle']; ?>
</a></p>
              <p class="mt10 gray"><?php echo $this->_tpl_vars['picnewslist1']['shordetail']; ?>
</p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="box_right">
          <ul class="newslist">
            <?php $_from = $this->_tpl_vars['newslist']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist1']):
?>
            <li><a href="<?php echo $this->_tpl_vars['newslist1']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist1']['shorttitle']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      <div class="hide clearfix">
        <div class="box_left"> <?php $_from = $this->_tpl_vars['picnewslist']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picnewslist2']):
?>
          <div class="picnewslist clearfix">
            <div class="img"><img src="<?php echo $this->_tpl_vars['picnewslist2']['n_pic']; ?>
"></div>
            <div class="info">
              <p><a href="<?php echo $this->_tpl_vars['picnewslist2']['n_url']; ?>
" class="f14 fb"><?php echo $this->_tpl_vars['picnewslist2']['shorttitle']; ?>
</a></p>
              <p class="mt10 gray"><?php echo $this->_tpl_vars['picnewslist2']['shordetail']; ?>
</p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="box_right">
          <ul class="newslist">
            <?php $_from = $this->_tpl_vars['newslist']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist2']):
?>
            <li><a href="<?php echo $this->_tpl_vars['newslist2']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist2']['shorttitle']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      <div class="hide clearfix">
        <div class="box_left"> <?php $_from = $this->_tpl_vars['picnewslist']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picnewslist3']):
?>
          <div class="picnewslist clearfix">
            <div class="img"><img src="<?php echo $this->_tpl_vars['picnewslist3']['n_pic']; ?>
"></div>
            <div class="info">
              <p><a href="<?php echo $this->_tpl_vars['picnewslist3']['n_url']; ?>
" class="f14 fb"><?php echo $this->_tpl_vars['picnewslist3']['shorttitle']; ?>
</a></p>
              <p class="mt10 gray"><?php echo $this->_tpl_vars['picnewslist3']['shordetail']; ?>
</p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="box_right">
          <ul class="newslist">
            <?php $_from = $this->_tpl_vars['newslist']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist3']):
?>
            <li><a href="<?php echo $this->_tpl_vars['newslist3']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist3']['shorttitle']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      <div class="hide clearfix">
        <div class="box_left"> <?php $_from = $this->_tpl_vars['picnewslist']['4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picnewslist4']):
?>
          <div class="picnewslist clearfix">
            <div class="img"><img src="<?php echo $this->_tpl_vars['picnewslist4']['n_pic']; ?>
"></div>
            <div class="info">
              <p><a href="<?php echo $this->_tpl_vars['picnewslist4']['n_url']; ?>
" class="f14 fb"><?php echo $this->_tpl_vars['picnewslist4']['shorttitle']; ?>
</a></p>
              <p class="mt10 gray"><?php echo $this->_tpl_vars['picnewslist4']['shordetail']; ?>
</p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="box_right">
          <ul class="newslist">
            <?php $_from = $this->_tpl_vars['newslist']['4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist4']):
?>
            <li><a href="<?php echo $this->_tpl_vars['newslist4']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist4']['shorttitle']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="index_right02">
    <div class="commonbox01">
      <h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=12" class="more">查看更多二手车问答</a><span>二手车问答</span></h3>
      <div class="box">
        <ul class="asklist clearfix">
          <?php $_from = $this->_tpl_vars['newslist']['5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist5']):
?>
          <li>
            <div class="ask clearfix"><i></i><strong><a href="<?php echo $this->_tpl_vars['newslist5']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist5']['n_title']; ?>
</a></strong></div>
            <div class="reply clearfix"><i></i>
              <p><a href="<?php echo $this->_tpl_vars['newslist5']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist5']['shordetail']; ?>
</a></p>
            </div>
          </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<script language="JavaScript">
$(function() {
	$news_li = $("ul.indexnews_tab li");
	$news_li.click(function() {
		$(this).addClass("here").siblings().removeClass("here");
		var index = $news_li.index(this);
		$("div.indexnews_box > div").eq(index).show().siblings().hide();
	});
});
</script>

<div class="mt15 clearfix" id="services">
  <!--公司相关-->
  <dl class="d1">
    <dt>售后服务电话</dt>
    <dd class="tel"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</dd>
    <dd class="time">8:30-17:00(工作时间)</dd>
    <dd>客服邮箱:<?php echo $this->_tpl_vars['setting']['email']; ?>
</dd>
  </dl>
  <dl>
    <dt>交易帮助</dt>
    <dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=20">买车帮助</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=17">卖车帮助</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=news&catid=18">过户帮助</a> </dd>
  </dl>
  <dl>
    <dt>了解我们</dt>
    <dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/contact/">关于我们</a><a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/contact/86.html">公司简介</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/contact/85.html">人才招聘</a> </dd>
  </dl>
  <dl>
    <dt>客服中心</dt>
    <dd> <a style="text-decoration: none;font-weight: bold;"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/contact/86.html">网站合作</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/contact/contact.html">联系我们</a> </dd>
  </dl>
  <dl>
    <dt>意见反馈</dt>
    <dd> <a id="feedback" href="javascript:;">投诉与建议</a> </dd>
  </dl>
  <dl class="d6">
    <dt>特色服务</dt>
    <dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/join/">加盟我们</a> </dd>
	<dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/appraise/">车况鉴定</a> </dd>
	<dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=assesscar">二手车评估</a> </dd>
  </dl>
</div>
<div class="main clearfix">
		<div class="both_box">
            <ul class="clearfix">
            <!-- li标签如果可链接添加 click_direct样式，添加rel属性，只为链接地址-->
                <li class="click_direct" rel="#">
                    <div class="pic pic_style1"></div>
                    <h4>100%真实车源</h4>
                    <p>100%真实车源，针对普通消费者推出的真实车源服务！</p>
                </li>
				<!-- 
                <li class="click_direct" rel="#">
                    <div class="pic pic_style2"></div>
                    <h4>售前免费车况检测</h4>
                    <p>凡是在各连锁店购车的用户均可免费享受检测服务。</p>
                </li>
                -->
                <li class="click_direct" rel="#">
                    <div class="pic pic_style3"></div>
                    <h4>延长保修服务</h4>
                    <p>为消费者提供超过保修期与保修范围的维修服务。</p>
                </li>
                <li>
                    <div class="pic pic_style5"></div>
                    <h4>代办服务</h4>
                    <p>交易顾问为您代办各类手续和文件，节约您90%的时间！</p>
                </li>                
                <li>
                    <div class="pic pic_style4"></div>
                    <h4>贷款服务</h4>
                    <p>根据您的资信和具体情况确定分期细节，轻轻松松把车“贷”回家。</p>
                </li>
				<!-- 
                <li class="click_direct" rel="#">
                    <div class="pic pic_style6"></div>
                    <h4>免费保修服务</h4>
                    <p>到所有门店购车，可享免费车况检测，并赠送免费保修服务。</p>
                </li>
				 -->
            </ul>
        </div>
</div>
<script language="JavaScript">
$(function() {
	$mark_li = $("div.marklist ul li");
	$mark_li.mouseover(function() {
		$(this).addClass("here").siblings().removeClass("here");
		var index = $mark_li.index(this);
		$("div.marklistbox > div").eq(index).show().siblings().hide();
	});
});
</script>
<div class="main mt15 clearfix">
  <ul class="indexnews_tab clearfix">
    <li class="here">友情链接</li>
    <li>热门车系</li>
  </ul>
  <div class="indexnews_box">
    <div class="p10">
      <ul class="link_list clearfix">
        <?php $_from = $this->_tpl_vars['link_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist']):
?>
        <li><a href="<?php echo $this->_tpl_vars['linklist']['l_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['linklist']['l_name']; ?>
</a></li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
    <div class="hide p10">
      <div class="marklist">
        <ul class="clearfix">
          <?php $_from = $this->_tpl_vars['hotkeywordlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkeyword']):
?> <li <?php if ($this->_tpl_vars['skey'] == 'A'): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['skey']; ?>

          </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
      <div class="marklistbox"> <?php $_from = $this->_tpl_vars['hotkeywordlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkeyword']):
?>
        <div class="markbox <?php if ($this->_tpl_vars['skey'] <> 'A'): ?>hide<?php endif; ?>"> <?php $_from = $this->_tpl_vars['hotkeyword']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkey']):
?> <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&k=<?php echo $this->_tpl_vars['hotkey']['keyword']; ?>
"><?php echo $this->_tpl_vars['hotkey']['keywords']; ?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <?php endforeach; endif; unset($_from); ?> </div>
        <?php endforeach; endif; unset($_from); ?> </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>