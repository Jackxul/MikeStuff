<?php include("a_config.php");?>
<!DOCTYPE html>

	$db_host = "sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342";
	$db_user = "ecvdemouser";
	$db_password = "ecv@demouser2024";
	$db_name = "mikesqltest";

    // 连接数据库
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
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
            	padding: 5px; /* 设置输入框的内边距 */
           	margin-bottom: 10px; /* 设置输入框之间的间距 */
            }
    </style>


	<?php 
	        if(isset($_POST['button1'])) { 
	            echo "This is Button1 that is selected"; 
	        } 
	        if(isset($_POST['button2'])) { 
	            echo "This is Button2 that is selected"; 
	        } 
	?> 

    <form action="login.php" method="post">

        <label for="region">Region</label><br>
        <input type="text" id="region" name="region" required><br><br>

        <label for="projectname">Project Name</label><br>
        <input type="text" id="projectname" name="projectname" required><br><br>

        <label for="servicename">Service Name</label><br>
        <input type="text" id="servicename" name="servicename" required><br><br>

        <label for="cost">Cost</label><br>
        <input type="text" id="cost" name="cost" required><br><br>

	<input type="submit" name="button1"
                value="Button1"/> 
          
        <input type="submit" name="button2"
                value="Button2"/> 
    </form>
</div>
<?php include("footer.php");?>
</body>
</html>


