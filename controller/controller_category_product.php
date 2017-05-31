<?php
class category_product extends controller
{
	public function __construct()
	{
		parent::__construct();
	$id=isset($_GET["id"])==true?$_GET["id"]:0;
		$record_per_page=10;
		$total_record=$this->model->count("select * from tbl_book where fk_category_book_id=$id");
		$num_page=ceil($total_record/$record_per_page);
		$p=isset($_GET["p"])?($_GET["p"]-1):0;
		$from=$p*$record_per_page;
		$arr=$this->model->fetch("select * from tbl_book where fk_category_book_id=$id limit $from,$record_per_page");

		include "view/view_category_product.php";
	}
}
new category_product();
?>