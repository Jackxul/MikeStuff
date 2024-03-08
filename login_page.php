<?php
// 包含数据库连接信息
include("a_config.php");

// 定义数据库连接信息
$db_host = "sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342";
$db_user = "ecvdemouser";
$db_password = "ecv@demouser2024";
$db_name = "mikesqltest";

// 检查是否提交了表单
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单中的值
    $region = $_POST["region"];
    $projectname = $_POST["projectname"];
    $servicename = $_POST["servicename"];
    $cost = $_POST["cost"];

    // 连接数据库
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // 检查连接是否成功
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }

    // 在这里执行数据库插入操作
    $sql = "INSERT INTO Table_0 (region, projectname, servicename, cost) VALUES ('$region', '$projectname', '$servicename', '$cost')";

    // 运行查询
    if (mysqli_query($conn, $sql)) {
        echo "记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // 关闭数据库连接
    mysqli_close($conn);
}
?>

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
            	padding: 5px; /* 设置输入框的内边距 */
           	margin-bottom: 10px; /* 设置输入框之间的间距 */
            }
    </style>
    <form action="login.php" method="post">

        <label for="region">Region</label><br>
        <input type="text" id="region" name="region" required><br><br>

        <label for="projectname">Project Name</label><br>
        <input type="text" id="projectname" name="projectname" required><br><br>

        <label for="servicename">Service Name</label><br>
        <input type="text" id="servicename" name="servicename" required><br><br>

        <label for="cost">Cost</label><br>
        <input type="text" id="cost" name="cost" required><br><br>

        <input type="submit" value="Login">
    </form>
</div>
<?php include("footer.php");?>
</body>
</html>


