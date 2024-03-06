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
    <style>
        	/* 使用 CSS 来设置输入框的样式 */
        	input[type="text"],
        	input[type="password"] {
            	width: 200px; /* 设置输入框的宽度 */
            	padding: 50px; /* 设置输入框的内边距 */
           	margin-bottom: 10px; /* 设置输入框之间的间距 */
            }
    </style>
    <form action="login.php" method="post">

        <label for="region">Region：</label>
        <input type="text" id="region" name="region" required><br><br>

        <label for="projectname">Project Name：</label>
        <input type="text" id="projectname" name="projectname" required><br><br>

        <label for="servicename">Service Name：</label>
        <input type="text" id="servicename" name="servicename" required><br><br>

        <label for="cost">Cost：</label>
        <input type="text" id="cost" name="cost" required><br><br>

        <input type="submit" value="Login">
    </form>
</div>
<?php include("footer.php");?>
</body>
</html>

