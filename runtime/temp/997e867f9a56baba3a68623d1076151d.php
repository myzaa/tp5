<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"H:\geren\tp5\public/../application/admin\view\index\index.html";i:1484278025;}*/ ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>验证码使用</title>
</head>
<body>
	<input type="text" name="input">
	<?php echo captcha_img(); ?>
</body>
</html>