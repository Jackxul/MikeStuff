<?php include("a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("head-tag-contents.php");?>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>登录页面</title>
</head>
<body>

<?php include("design-top.php");?>
<?php include("navigation.php");?>
    <h2>欢迎登录</h2>
    <form action="login.php" method="post">
        <label for="username">用户名：</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">密码：</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="登录">
    </form>
<?php include("footer.php");?>
</body>
</html>

