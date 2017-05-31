<?php
 class bill_detail extends controller
 {
 	public function __construct()
 	{
 			parent::__construct();
 			$order_id=isset($_GET["order_id"])?$_GET["order_id"]:0;
 			
 				$data["arr"]=$this->model->fetch("select * from tbl_order_detail where fk_order_id=$order_id order by  pk_order_detail_id desc ");
 				
 				extract($data);
 			include ("view/view_bill_detail.php");
 	}
 }
 new bill_detail();
?>