<?php
ob_start();
//start session
session_start();
include "config.php";
include "application/model.php";
include "application/controller.php";
//load controller into view layout	
 					
$load_controller="";

$controller=isset($_GET["controller"])?$_GET["controller"]:"home";
$load_controller="controller/controller_$controller.php";
include  "view/view_layout.php";

?>