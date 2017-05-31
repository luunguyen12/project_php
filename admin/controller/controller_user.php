<?php
class user extends controller
{
	public function __construct()	
	{
		parent::__construct();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act)
		{
		case "delete":
			$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;

			$this->model->execute("delete from tbl_user where pk_user_id=$id ");
			header("index.php?controller=user");	
			break;
		}
		
		$record_per_page=3;
		$total_record=$this->model->count("select * from tbl_user");
		$num_page=ceil($total_record/$record_per_page);
		$page=isset($_GET["p"])?($_GET["p"]-1):0;
		$from=$page*$record_per_page;
		$arr=$this->model->fetch("select * from tbl_user limit $from ,$record_per_page");
		include "view/view_user.php";
	}
}
new user();
?>