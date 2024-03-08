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

	<?php 



		try {
		    $conn = new PDO("sqlsrv:server = tcp:sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342; Database = AdventureWorks", "ecvdemouser", "ecv@demouser2024");
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully";  // 連線成功時的提示
		}
		catch (PDOException $e) {
		    print("Error connecting to SQL Server.");
		    die(print_r($e));
		}
		
		// SQL Server Extension Sample Code:
		$connectionInfo = array("UID" => "ecvdemouser@sqlmikaydemo", "pwd" => "ecv@demouser2024", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
		$serverName = "tcp:sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342";
		$conn = sqlsrv_connect($serverName, $connectionInfo);
		
		// 其他你的應用程式邏輯可以放在這之後
	        if(isset($_POST['button2'])) { 
	            echo "Data insert to DB !"; 
	        } 



	//	$db_host = "sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342";
	//	$db_user = "ecvdemouser";
	//	$db_password = "ecv@demouser2024";
	//	$db_name = "mikesqltest";
	//	
	//	    // 连接数据库
	//   	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	//	if(!$conn) {
    	//		die("Connection failed: " . mysqli_connect_error());
  	//	}
  	//	echo "Connected successfully!";

	?> 

    <form method="post">

        <label for="region">Region</label><br>
        <input type="text" id="region" name="region" required><br><br>

        <label for="projectname">Project Name</label><br>
        <input type="text" id="projectname" name="projectname" required><br><br>

        <label for="servicename">Service Name</label><br>
        <input type="text" id="servicename" name="servicename" required><br><br>

        <label for="cost">Cost</label><br>
        <input type="text" id="cost" name="cost" required><br><br>

	<input type="button" name="button1" oneclick="emptyTextbox()" value="Cancel"/> 
        <input type="submit" name="button2" value="Send"/> 
    </form>

    <script>
        function emptyTextbox() {
            // Get the textbox element
            var region = document.getElementById("region");
            var pjname = document.getElementById("projectname");
            var servicename = document.getElementById("servicename");
            var cost = document.getElementById("cost");
            // Set the value of the textbox to an empty string
            region.value = "";
            pjname.value = "";
            servicename.value = "";
            cost.value = "";
        }
    </script>
    

</div>
<?php include("footer.php");?>
</body>
</html>


