<?php
class logout extends controller
{
	public function __construct()
	{
		unset($_SESSION["username"]);
		header("location:index.php");
		
	}
}
new logout();
?>