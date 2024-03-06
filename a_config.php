<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/login_page.php":
			$CURRENT_PAGE = "Login"; 
			$PAGE_TITLE = "Login_Demo";
			break;
		case "/php-template/database_page.php":
			$CURRENT_PAGE = "DataBase"; 
			$PAGE_TITLE = "DataBase_Demo";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>
