<?php
class home extends controller
{
	public function __construct()
	{
		parent::__construct();
		$product_hot=$this->model->fetch("select * from tbl_book where c_sapxuatban=1 limit 0,6");
		$product_new=$this->model->fetch("select * from tbl_book order by pk_book_id desc limit 0,3");
		include "view/view_home.php"; 
		
	}
}
new home();
?>