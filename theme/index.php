<?php

if($_GET['option_menu']) {
	$class = trim(strip_tags($_GET['option_menu']));
}

elseif($_GET['option'])
{
        $class = 'product_details_';
}
else {
	$class = 'home_';	
}
$_GET['base']=$num_rows;
include ("theme/header.php");
include("theme/".$class."content.php");
include ("theme/footer.php");
?>