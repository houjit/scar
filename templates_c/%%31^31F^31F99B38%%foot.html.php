<?php /* Smarty version 2.6.18, created on 2016-10-31 10:17:29
         compiled from default/default/foot.html */ ?>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/layer/layer.min.js"></script>
<script language="JavaScript">
$(function() {
	$('#feedback').on('click', function(){
		var feedbackindex =  $.layer({
			type: 1,
			title: '意见反馈',
			shade: [0.5, '#000'],
			area: ['440px', 'auto'],
			page: {dom: '#A1'}
		});
	
		$('#btnfeedback').on('click', function(){
			$.post("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&feedback=1",{
				f_tel: $("#A1 input[name='f_tel']").val(),
				f_detail:$("#A1 textarea[name='f_detail']").val()
				},function(data){
					if (data==1)
					{
						layer.close(feedbackindex);
						layer.alert("您的反馈信息已成功提交！", 9);
						$('#feedbackform')[0].reset();
					}
					else{
						layer.close(feedbackindex);
						layer.alert("提交失败！请再次提交！", 9);
					}
				});
		});
	});
});
</script>
<!--底部导航-->
<div class="footer" id="foot">
	<div class="footbox">
      <div class="footleft">
		<p class="foottop">
			<?php $_from = $this->_tpl_vars['partlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['part']):
?>
			<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/<?php echo $this->_tpl_vars['part']['c_url']; ?>
" title="<?php echo $this->_tpl_vars['part']['c_name']; ?>
" class="whiteA f14 pl10 pr10"><?php echo $this->_tpl_vars['part']['c_name']; ?>
</a> | 
			<?php endforeach; endif; unset($_from); ?>
		</p>
		<p class="mt10 pl10"> <?php echo $this->_tpl_vars['setting']['title']; ?>
&nbsp;&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#9c9c9c"><?php echo $this->_tpl_vars['setting']['icp']; ?>
</a>&nbsp;&nbsp;&nbsp;咨询电话：<span class="orange01 fb"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span></p>
		<p class="mt10 pl10"> Copyright  2014-2015 <?php echo $this->_tpl_vars['setting']['copyright']; ?>
 版权所有.  &nbsp;&nbsp;&nbsp;地址：<?php echo $this->_tpl_vars['setting']['address']; ?>
 </p>
      </div>
      <ul class="footright">
      	<!--<li>
        	<img src="" width="100" height="100" />
        </li>
        <li>
        	<p class="footright_p1">江阴二手汽车手机版</p>
            <p class="footright_p2">海量车源 随时掌握</p>
        </li>-->
        <li>
        	<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/default/image/weixin.jpg" width="100" height="100" />
        </li>
        <li>
        	<p class="footright_p1">二手车网官方微信</p>
            <p class="footright_p2">扫描二维码，即可进行互动，还有惊爆优惠等你来拿！</p>
        </li>
      </ul>
	</div>
	<div id="right-side" class="right-side">
		<ul>
		<li class="side-top w4"><a id="backtop" title="返回顶部" href="#top" style="display: block;">返回顶部</a></li>
	  </ul>
	</div>
</div>
<div id="A1" class="hide">
	<div class="popnotice">
		请填写您的反馈内容和联系电话
	</div>
	<div class="p20">
	<form method="post" name="yuyueform" id="yuyueform" class="yuyueform">
		<table class="poptable">
		<tr> 
			<th><span class="red">*</span> 反馈内容：</th>
			<td><textarea name="f_detail" rows="5" cols="35" datatype="*" nullmsg="请填写留言！"></textarea></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 手机号：</th>
			<td><input type="text" name="f_tel" datatype="m" nullmsg="请填写手机号！"></td>
		</tr>
		<tr>
			<th></th>
			<td class="gray">您的信息不会在网站上显示，我们将保证您的隐私安全。</td>
		</tr>
		<tr>
			<th></th>
			<td><span class="button_orange h35-p25 mr5"><a id="btnfeedback" href="javascript:;">提交</a></span></td>
		</tr>
		</table>
	</form>
	</div>
</div>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/lanrenzhijia.js"></script>
<div id="floatTools" class="lanrenzhijia-cs">
  <div class="floatL"> <a style="display: block" id="aFloatTools_Show" class="btnOpen" title="查看在线客服" onClick="javascript:$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ $('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.lanrenzhijia.com'); });$('#aFloatTools_Show').attr('style','display:none');$('#aFloatTools_Hide').attr('style','display:block');" href="javascript:void(0);"> 展开</a> <a style="display: none" id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" onClick="javascript:$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ $('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.lanrenzhijia.com'); });$('#aFloatTools_Show').attr('style','display:block');$('#aFloatTools_Hide').attr('style','display:none');" href="javascript:void(0);"> 收缩</a> </div>
  <div id="divFloatToolsView" class="floatR display: none">
    <div class="cn">
      <h3 class="titZx">车辆买卖</h3>
      <ul>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=485368&site=qq&menu=yes"> <img border="0" src="http://wpa.qq.com/pa?p=2:485368:51" alt="车辆买卖" title="车辆买卖" /></a> </li>
        </li>
      </ul>
      <h3>上牌过户</h3>
      <ul>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=485368&site=qq&menu=yes"> <img border="0" src="http://wpa.qq.com/pa?p=2:485368:51" alt="上牌过户" title="上牌过户" /></a></li>
      </ul>
      <h3>评估专家</h3>
      <ul>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=485368&site=qq&menu=yes"> <img border="0" src="http://wpa.qq.com/pa?p=2:485368:51" alt="评估专家" title="评估专家" /></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- 版权 结束 -->