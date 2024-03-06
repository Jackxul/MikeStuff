<?php include("a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("head-tag-contents.php");?>
    	<meta charset="UTF-8">
    	<title>Login Page</title>
</head>
<body>

<?php include("design-top.php");?>
<?php include("navigation.php");?>
<div class="container" id="main-content">
    <h2>Please Login</h2>
    <form action="login.php" method="post">
        <label for="username">User Name：</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password：</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</div>
<?php include("footer.php");?>
</body>
</html>

