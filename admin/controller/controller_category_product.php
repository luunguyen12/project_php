<?php
class category_product extends controller{
	public function __construct()
	{
		parent::__construct();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act){
			case 'delete':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$this->model->execute("delete from tbl_category_book where pk_category_book_id=$id");
			header("location:index.php?controller=category_product");
			break;
				}
		$record_per_page=10;
		$total_record=$this->model->count("select * from tbl_category_book");
		$num_page=ceil($total_record/$record_per_page);
		$page=isset($_GET["p"])?($_GET["p"]-1):0;
		$from=$record_per_page*$page;
		$arr=$this->model->fetch("select * from tbl_category_book limit $from,$record_per_page ");
			include "view/view_category_product.php";
		}
	}
new category_product();
?>