<?php
class add_category_product extends controller{
	public function __construct()
	{
		parent::__construct();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act)
		{
			case 'edit';
				$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
				$arr=$this->model->fetch_one("select * from tbl_category_book where pk_category_book_id=$id");
				$form="index.php?controller=add_edit_category_product&act=do_edit&id=$id";
				include "view/view_add_edit_category_product.php";
				break;
				case 'do_edit':
			$c_name=$_POST["c_name"];
				$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
				$this->model->execute("update tbl_category_book set c_name='$c_name' where pk_category_book_id=$id");
				header('location:index.php?controller=category_product');
				break;
			case 'add':
				$form="index.php?controller=add_edit_category_product&act=do_add";
				include "view/view_add_edit_category_product.php";	
				break;
				case 'do_add':
				$c_name=$_POST["c_name"];
				$this->model->execute("insert into tbl_category_book (c_name) values ('$c_name') ");
				header("location:index.php?controller=category_product");
			break;
		}
	}
}
new add_category_product();
?>