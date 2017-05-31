<?php
class news extends controller
{
	public function __construct()
	{
		parent::__construct();
			parent::__construct();
		$record_per_page=3;
		$toltal_record=$this->model->count("select * from tbl_news");
		$num_page=ceil($toltal_record/$record_per_page);
		$page=isset($_GET["p"])?($_GET["p"]-1):0;
		$from=$page*$record_per_page;
		$arr=$this->model->fetch("select * from  tbl_news order by pk_news_id desc limit $from,$record_per_page");
		
		include "view/view_news.php";
	}
}
new news();
?>