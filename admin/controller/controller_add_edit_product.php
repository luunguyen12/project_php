<?php
class add_product extends controller
{
	public function __construct()
	{
		parent::__construct();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act)
		{
			
			case 'edit':
				$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
				$arr=$this->model->fetch_one("select * from tbl_book where pk_book_id=$id");
				$form_control="index.php?controller=add_edit_product&act=do_edit&id=$id";
				include "view/view_add_edit_product.php";
			break;
			case 'do_edit':
					$c_name=$_POST["c_name"];
					$c_description=$_POST["c_description"];
					$c_content=$_POST["c_content"];
					$c_sapxuatban=isset($_POST["c_sapxuatban"])?1:0;
					$c_price=$_POST["c_price"];
					$fk_category_book_id=$_POST["fk_category_book_id"];
					
				$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$this->model->execute("update tbl_book set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_sapxuatban=$c_sapxuatban,c_price=$c_price,fk_category_book_id=$fk_category_book_id where pk_book_id=$id");
					$c_img="";
					if($_FILES["c_img"]["name"]!="")
					{
						$arr_old_img=$this->model->fetch_one("select c_img from tbl_book where pk_book_id=$id");
						$old_img=$arr_old_img["c_img"];
						if(file_exists("../".$old_img))
							unlink("../".$old_img);
						$c_img="public/upload/product/".time().$_FILES["c_img"]["name"];
					move_uploaded_file($_FILES["c_img"]["tmp_name"],"../".$c_img);
						$this->model->execute("update tbl_book set c_img='$c_img' where pk_book_id=$id");
					}
					header("location:index.php?controller=product");	
					break;
					case 'add':
					$form_control="index.php?controller=add_edit_product&act=do_add";
					include "view/view_add_edit_product.php";
			break;
			case 'do_add':
			$c_name=$_POST["c_name"];
			$c_description=$_POST["c_description"];
			$c_content=$_POST["c_content"];
			$c_sapxuatban=isset($_POST["c_sapxuatban"])?1:0;
			$c_price=$_POST["c_price"];
			$fk_category_book_id=$_POST["fk_category_book_id"];
				$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$c_img="";
			if($_FILES["c_img"]["name"]!="")
			{
				
				$c_img="public/upload/product/".time().$_FILES["c_img"]["name"];
			move_uploaded_file($_FILES["c_img"]["tmp_name"],"../".$c_img);
				
			}
			$this->model->execute("insert into tbl_book(c_name,c_description,c_content,c_sapxuatban,c_price,fk_category_book_id,c_img) values('$c_name','$c_description','$c_content',$c_sapxuatban,$c_price,$fk_category_book_id,'$c_img')");
			
			header("location:index.php?controller=product");
				break;
		}	
}
}
new add_product();
?>
