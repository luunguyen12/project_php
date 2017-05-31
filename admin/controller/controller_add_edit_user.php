<?php
class add_user extends controller
{
	public function __construct()
	{
		parent::__construct();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act)
		{
			case "edit":
			$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$arr=$this->model->fetch_one("select c_username,c_fullname,pK_user_id,c_password from tbl_user where pK_user_id=$id");
			$form_action="index.php?controller=add_edit_user&act=do_edit&id=$id";
			include "view/view_add_edit_user.php";
			break;
			case "do_edit":
			$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			
			$c_password=md5($_POST["c_password"]);
			$c_fullname=$_POST["c_fullname"];
			$this->model->execute("update tbl_user set c_fullname='$c_fullname' where pK_user_id=$id");
			if($c_password !="")
				{
					$c_password=md5($_POST["c_password"]);
					$this->model->execute("update tbl_user set c_password='$c_password' where pK_user_id=$id");
				}
				header("location:index.php?controller=user");

			break;
			case "do_add":
			$c_username=$_POST["c_username"];
			$c_password=md5($_POST["c_password"]);
			$c_fullname=$_POST["c_fullname"];
			$this->model->execute("insert into tbl_user(c_username,c_password,c_fullname) values ('$c_username','$c_password','$c_fullname')");
				header("location:index.php?controller=user");
			break;
			default:
				$form_action="index.php?controller=add_edit_user&act=do_add";
				include 'view/view_add_edit_user.php';
				break;
		}
	
	}
}
new add_user();
?>