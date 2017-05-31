<?php
class product_detail extends controller
{
	public function __construct()
	{
		parent::__construct();
			$id=isset($_GET["id"])==true?$_GET["id"]:0;
		$arr=$this->model->fetch_one("select * from tbl_book where pk_book_id=$id");
		$product=$this->model->fetch("select * from tbl_book  limit 0,4");
		$product_news=$this->model->fetch("select * from tbl_book  limit 0,3");
		$product_hot=$this->model->fetch("select * from tbl_book where c_sapxuatban=1 limit 0,3");
		include "view/view_product_detail.php";
	}
}
new product_detail();
?>