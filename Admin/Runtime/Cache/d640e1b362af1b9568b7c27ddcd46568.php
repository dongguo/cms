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
	<form action="__URL__/settings" method="post">
网站名称<input type="text" name="webname" value="<?php echo ($website['webname']); ?>"/><br />
网站标题<input type="text" name="title" value="<?php echo ($website['title']); ?>"/><br />
网站关键词<input type="text" name="keywords" value="<?php echo ($website['keywords']); ?>"  /><br />
网站描述 <input type="text" name="description" value="<?php echo ($website['description']); ?>"/>
<input type="submit" name="sub" value="确定"/>
</form>
	</div>
</div>

	</div>
</body>

</html>