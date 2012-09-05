<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CMS后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ad_common.css" />
</head>

<body>
	<div id="wpwrap">
		<div id="adminbar" class="" role="navigation">
			<div class="quicklinks">
				<ul class="top_left">
					<li>
						<a href="__ROOT__">网站首页</a>
					</li>
				</ul>
				<ul class="top_right">
					<li>
						<a href="">您好，<?php echo ($_SESSION['loginUserName']); ?></a>
					</li>
					<li>
						<a href="__APP__/Public/logout">退出</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
		
<div class="content">
	<div class="left">
	
	<div id="adminmenubg">
		<ul class="adminmenu">
			<li><a href="__APP__/index/index">网站信息</a></li>
			<li><a href="__APP__/index/setting">站点设置</a></li>
			<li><a href="">网站信息</a></li>
			<li><a href="">网站信息</a></li>
		</ul>
	</div>



	</div>
	<div class="right">
	<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><?php echo ($key); ?></span><span><?php echo ($v); ?></span><br /><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
	</div>
</body>

</html>