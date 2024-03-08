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
	        if(isset($_POST['button2'])) { 
	            echo "Data insert to DB !"; 
	        } 



		$db_host = "sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342";
		$db_user = "ecvdemouser";
		$db_password = "ecv@demouser2024";
		$db_name = "mikesqltest";
		
		    // 连接数据库
	   	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

		if(!$conn) {
    			die("Connection failed: " . mysqli_connect_error());
  		}
  		echo "Connected successfully!";

  		mysqli_close($conn);
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


