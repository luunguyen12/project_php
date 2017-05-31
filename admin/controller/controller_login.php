<?php
class controller_login extends controller{
	public function __construct()
	{
		parent::__construct();
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$c_username=$_POST["c_username"];
			$c_password=md5($_POST["c_password"]);
			$arr=$this->model->fetch_one("select c_username,c_password from tbl_user where c_username='$c_username'");
			if(isset($arr))
			{
				if($c_password==$arr["c_password"])
				{
					//dang nhap thanh cong			
				$_SESSION["c_username"]=$c_username;
				header("location:index.php");

				}

			}

			else 
			{
			header("location:index.php?controller=login");
				}
			}
		include "view/view_login.php"; 
	}
}
new controller_login()
?>