<?php
class news extends controller
{
	public function __construct()
	{
		parent::__construct();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act)
		{
			case 'delete':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$this->model->execute("delete from tbl_news where pk_news_id=$id");
			header("index.php?controller=news");
			break;
		}
		$record_per_page=10;
		$total_record=$this->model->count("select * from tbl_news");
		$num_page=ceil($total_record/$record_per_page);
		$page=isset($_GET["p"])?($_GET["p"]-1):0;
		$from=$page*$record_per_page;
		//thuc thi cau truy van
		$data["arr"]=$this->model->fetch("select * from tbl_news order by pk_news_id desc limit $from,$record_per_page");
		$data["num_page"]=$num_page;
		extract($data);
		include "view/view_news.php";
		
	}
}
new news();
?>