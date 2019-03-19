<?php /* Smarty version 2.6.18, created on 2016-10-31 10:17:29
         compiled from default/default/top.html */ ?>

<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
<script language="JavaScript">
$(function(){
	$("#login").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&login=1");
})
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php endif; ?>
<div class="top">
	<div class="top_main clearfix">
		<div class="top_left">
			欢迎来到<?php echo $this->_tpl_vars['setting']['sitename']; ?>
！<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?><span id="login"></span><?php endif; ?>
		</div>
		<div class="top_right">
			<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/m/">手机端</a>&nbsp;&nbsp;|&nbsp;&nbsp;客服热线：<span class="orange01 fb"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span>
		</div>
	</div>
</div>