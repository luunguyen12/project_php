<?php
class news_detail extends controller
{
	public function __construct()
	{
		parent::__construct();
		$id=isset($_GET["id"])==true?$_GET["id"]:0;
		$arr=$this->model->fetch_one("select * from tbl_news where pk_news_id=$id");
		include "view/view_news_detail.php";
	}
}
new news_detail();
?>