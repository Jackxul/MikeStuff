<?php include("a_config.php");?>
<!DOCTYPE html> 
<html> 
	
<head> 
	<?php include("head-tag-contents.php");?>
	<title> 
		How to call PHP function 
		on the click of a Button ? 
	</title> 
</head> 

<body style="text-align:center;"> 
<?php include("design-top.php");?>
<?php include("navigation.php");?>
	
	<h1 style="color:green;"> 
		GeeksforGeeks 
	</h1> 
	
	<h4> 
		How to call PHP function 
		on the click of a Button ? 
	</h4> 

	<?php
	
		if(isset($_POST['button1'])) { 
			echo "This is Button1 that is selected"; 
		} 
		if(isset($_POST['button2'])) { 
			echo "This is Button2 that is selected"; 
		} 
	?> 
	
	<form method="post"> 
		<input type="submit" name="button1"
				value="Button1"/> 
		
		<input type="submit" name="button2"
				value="Button2"/> 
	</form> 
<?php include("footer.php");?>
</body> 

</html> 

