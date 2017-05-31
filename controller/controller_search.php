<?php
class search extends controller
{
	public function __construct()
	{
		parent::__construct();
		$key=isset($_POST["key"])?$_POST["key"]:"";
		$key=isset($_GET["key"])?$_GET["key"]:$key;
		$record_per_page=10;
		$total_record=$this->model->count("select * from tbl_book where c_name like '%$key%'");
		$num_page=ceil($total_record/$record_per_page);
		$page=isset($_GET["p"])?($_GET["p"]-1):0;
		$from=$page*$record_per_page;
		$arr_category = $this->model->fetch("select * from tbl_book where c_name like '%$key%'  limit $from,$record_per_page");
		include "view/view_search.php";
	}

}
new search();
?>