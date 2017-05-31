<?php
class product extends controller
{
	public function __construct()
	{
		parent::__construct();
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act)
	{
		case "delete":
		$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		$this->model->execute("delete from tbl_book where pk_book_id=$id");
		header("location:index.php?controller=product");
		break;
	}
		$record_per_page=20;
		$toltal_record=$this->model->count("select * from tbl_book ");
		$num_page=ceil($toltal_record/$record_per_page);
		$page=isset($_GET["p"])?($_GET["p"]-1):0;
		$from=$page*$record_per_page;
		$arr=$this->model->fetch("select * from tbl_book limit $from,$record_per_page");
		include "view/view_product.php";
	}
}
new product();
?>