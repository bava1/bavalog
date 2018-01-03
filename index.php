<!DOCTYPE html>
<head>
<title>LOGCROWLER</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Студия программирования компьютерной графики и анимации." /> 
<meta name="keywords" content="Студия программирования компьютерной графики и анимации." />
<meta name="author" content="VINUS" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/template.css">
</head>
<body>
<?php
	//Блок создания и записи лог-файла
	//Block for creating and writing a log-file
	$date = (date("d. F. Y "));
	$time = (date("H:i:s"));
	$fd = fopen('stat.txt', 'a');
	$str = $_SERVER['REMOTE_ADDR'].'>'.$_SERVER["REQUEST_METHOD"].'>'.$time.'>'.$date.'>'.
	$_SERVER['HTTP_REFERER'].'>'.$_SERVER['HTTP_USER_AGENT'];
	fwrite($fd, "$str\n");
	fclose($fd);
?>	
<div id ="wrap">
	<div id="block">
		<div class="sites"></div>
		<div class="menu-but1"></div>	
		<div class="menu-but2"></div>	
		<div class="menu-but3"></div>	
		<div class="menu-but4"></div>
		<div class="menu-but5"></div>	
		<div class="menu-but6"></div>	
		<div class="menu-but7"></div>	
		<div class="menu-but8"></div>	
		<div class="menu-but9"></div>
		<div class="menu-but10"></div>	
		<div class="crowler10"></div>
	</div>	
	<div class="third">
		<div class="third2">MOD STATISTIC</div>
	</div>		
</div>
<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.js"></script>
<script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>

