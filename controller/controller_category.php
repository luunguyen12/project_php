<?php
class category extends controller
{
	public function __construct()
	{
		parent::__construct();
		$arr=$this->model->fetch("select * from tbl_category_book");
		include "view/view_category.php";
	}
}
new category();
?>