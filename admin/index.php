<?php
session_start();
include "../config.php";
include "../application/model.php";
include "../application/controller.php";
if(isset($_SESSION["c_username"])==false)
 {
 	include "controller/controller_login.php";
 }
 else
 {
 	$load_controller="";
 	$controller=isset($_GET["controller"])?$_GET["controller"]:"";
 	$load_controller="controller/controller_$controller.php";
  include "view/view_layout.php";
 }