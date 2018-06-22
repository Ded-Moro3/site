<?php 
session_start();
header("Content-Type:text/html;charset=UTF-8");

require_once("config.php");    
require_once("classes/ACore.php");

if($_GET['option']) {
	$class = trim(strip_tags($_GET['option']));
}
else {
	$class = 'main';	
}

    if($_GET['lang']) {
	$_SESSION['lang'] = trim(strip_tags($_GET['lang']));
	$date = time() + 30*24*60*60;
	setcookie('lang',trim(strip_tags($_GET['lang'])),$date);
}
else if ($_COOKIE['lang']) {
	$_SESSION['lang'] = $_COOKIE['lang'];
}
else {
	$_SESSION['lang'] = 'ru';
}

//include 'theme/index.php';
if(file_exists("classes/".$class.".php")) {
	///
	include("classes/".$class.".php");
	if(class_exists($class)) {
		
		$obj = new $class;
		$obj->get_body();
        
	}
	else {
		exit("<p>Нет данные для входа</p>");
	}
}
else {
	exit("<p>Не правильный адресс</p>");
}	
 ?>

	
		        
	
