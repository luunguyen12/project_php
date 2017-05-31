<?php
class bill extends controller{
	public function __construct()
	{
			parent::__construct();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'delete':
					$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$this->model->execute("delete from tbl_order where pk_order_id=$id");
					$this->model->execute("delete from tbl_order_detail where fk_order_id=$id");
					header("location:index.php?controller=bill");
					break;
						}
			$record_per_page=2;
			$total_record=$this->model->count("select * from tbl_order ");
			$num_page=ceil($total_record/$record_per_page);
			$page=isset($_GET["p"])?($_GET["p"]-1):0;
			$from=$page*$record_per_page;
			$data["arr"]=$this->model->fetch("select * from tbl_order order by pk_order_id desc limit $from,$record_per_page");
			$data["num_page"]=$num_page;
			extract($data);
			include("view/view_bill.php");
	}
}
new bill();
?>