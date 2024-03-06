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

