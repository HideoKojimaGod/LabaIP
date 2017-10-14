<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>рофл</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<?php 
			include "menu.php";
			include "content.php";
			if (array_key_exists('page', $_GET)) $page = $_GET['page'];
			else $page = 1;
			echo Menu::renderMenu($page);
			echo Content::getPages($page - 1);
		?>
	</body>
</html>