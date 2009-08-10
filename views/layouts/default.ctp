<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> - <?php __('Study Bookmark'); ?>
	</title>
	<?php
	echo $html->meta('icon');
	echo $html->meta('description', '勉強会のまとめ的リンク集');
	echo $html->meta('keyword', '勉強会');
	echo $html->css(array('cake.base', 'cake.style'));
	if (Configure::read()) {
		echo $html->css('cake.debug');
	}
	echo $javascript->link('/jquery/js/jquery-1.3.2.min');
	echo $javascript->link('/jquery/js/jquery-ui-1.7.2.custom.min');
	echo $html->css('/jquery/css/smoothness/jquery-ui-1.7.2.custom');
	echo $javascript->codeBlock('$(function(){$("a[target=_blank]").addClass("blank");});');
	echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $html->link(__('Study Bookmark', true), '/'); ?></h1>
			<div id="user-navigation">
				<?php echo $this->element('user_navigation'); ?>
				<div class="clear"></div>
			</div>	  
			<div id="main-navigation">
				<?php echo $this->element('main_navigation'); ?>
				<div class="clear"></div>
			</div>
		</div>	  
		<div id="header-margin"></div>
		<div id="wrapper">

				<?php $session->flash(); ?>
				<?php echo $content_for_layout; ?>

			<div class="clear"></div>
		</div>
		<div id="footer">
			<div class="block">
				<p><?php
				echo $html->link('blog', 'http://d.hatena.ne.jp/slywalker/', array('target'=>'_blank'));
				echo ' - ';
				echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
				?></p>
			</div>
		</div>
		<div id="login" title="Login"></div>
	</div>
	<?php echo $cakeDebug;?>
</body>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2189697-7");
pageTracker._trackPageview();
} catch(err) {}</script>
</html>