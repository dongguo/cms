<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CMS后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ad_login.css" />
</head>
<body class="login">
	<div id="login">
		<h1>
			<a title="Cms后台管理系统" href="">CMS后台管理系统</a>
		</h1>
		<form id="loginform" method="post" action="__URL__/checkLogin" name="loginform">
			<p>
				<label for="user_login">
				管理员
				<br>
				<input id="user_login" class="input" type="text" tabindex="10" size="20" value="" name="username">
				</label>
			</p>
			<p>
				<label for="user_pass">
				密码
				<br>
				<input id="user_pass" class="input" type="password" tabindex="20" size="20" value="" name="password">
				</label>
			</p>
			<p class="submit">
				<input id="wp-submit" class="button-primary" type="submit" tabindex="100" value="登录" name="submit">
			</p>
		</form>	
	</div>
</body>
</html>