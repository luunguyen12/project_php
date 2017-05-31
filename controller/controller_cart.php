<?php
class cart extends controller
{
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION["cart"]))$_SESSION['cart']=array();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act)
		{
			case 'add':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$book=$this->model->fetch_one("select * from tbl_book where pk_book_id=$id");
			$this->cart_add($id,$book);
			echo "<meta http-equiv=\"refresh\" content=\"0; URL='index.php?controller=cart'\" />";
			break;
			case 'delete':
				$id=isset($_GET["id"])?$_GET["id"]:0;
				$this->cart_delete($id);
				echo "<meta http-equiv=\"refresh\" content=\"0; URL='index.php?controller=cart'\" />";
			break;
				case 'destroy':
				$id=isset($_GET["id"])?$_GET["id"]:0;
				$this->cart_destroy($id);
				echo "<meta http-equiv=\"refresh\" content=\"0; URL='index.php?controller=cart'\" />";
			break;
			case 'do_bill':
			$c_fullname = $_POST["c_fullname"];
			$c_address = $_POST["c_address"];
			$c_phone = $_POST["c_phone"];
			$c_create = date("Y-m-d");
			//inset thong tin vao tbl_order			
			$this->model->execute("insert into tbl_order(c_fullname,c_address,c_phone,c_create) values('$c_fullname','$c_address','$c_phone','$c_create')");
			//$fk_order_id = get_insert_id();
			//get insert id
			$insert_id = $this->model->fetch_one("select pk_order_id from tbl_order order by pk_order_id desc limit 0,1");
			$fk_order_id = $insert_id["pk_order_id"];
			//insert thong tin vao tbl_order_detail
			foreach($_SESSION["cart"] as $book)
			{
				$c_number = $book["number"];
				$c_price = $book["c_price"];
				$fk_book_id = $book["pk_book_id"];
				$this->model->execute("insert into tbl_order_detail(fk_order_id,c_number,c_price,fk_book_id) values($fk_order_id,$c_number,$c_price,$fk_book_id)");
			}
			//huy gio hang
			$this->cart_destroy();
			echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php?controller=cart\">";
			break;
		}
		include "view/view_cart.php";
	}
	public function cart_add($pk_book_id){
		    if(isset($_SESSION['cart'][$pk_book_id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$pk_book_id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //$product = get_a_record($pk_product_id);
		        $product = $this->model->fetch_one("select * from tbl_book where pk_book_id=$pk_book_id");
		        
		        $_SESSION['cart'][$pk_book_id] = array(
		            'pk_book_id' => $pk_book_id,
		            'c_name' => $product['c_name'],
		            'c_img' => $product['c_img'],
		            'number' => 1,
		            'c_price' => $product['c_price']
		        );
		    }
		}
/**
 * Cập nhật số lượng sản phẩm
 * @param int
 * @param int
 */
		public function cart_update($pk_book_id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$pk_book_id]);
		    } else {
		        $_SESSION['cart'][$pk_book_id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($pk_book_id){
		    unset($_SESSION['cart'][$pk_book_id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['c_price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}
}
new cart();
?>