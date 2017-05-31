<section id="cart_items">
		<div class="container">
		<div class="col-sm-9 padding-right">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">img</td>
							<td class="description"></td>
							<td class="price">price</td>
							<td class="quantity">SL</td>
						<td>total</td>
							<td >Delete</td>
							
						</tr>
					</thead>
					<?php
					foreach ($_SESSION["cart"] as $book)
					{
					?>
					<tbody>
					
						<tr>
							<td class="cart_product" style="text-align: center;">
								<a href=""><img src="<?php echo $book["c_img"]?>" style="width: 110px; height: 110px;"></a>
							</th>
							<td class="cart_description" style="text-align: center;">
								<h4><a href=""><?php echo $book["c_name"]?></a></h4>
								
							</td>
							<td class="cart_price"  >
								<p><?php echo number_format($book["c_price"])?></p>
							</td>
							<td class="cart_quantity" style="text-align: center;">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $book["number"]?>" autocomplete="off" size="2">
									
								</div>
							</td>
							<td>
								
							</td>
							<td class="cart_delete" style="text-align: center;">
								<a class="cart_quantity_delete" href="index.php?controller=cart&act=delete&id=<?php echo $book["pk_book_id"]?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					
						
					</tbody>
					<?php } ?>
				</table>
				
			</div>
		</div>
		</div>
	</section>
	<section id="do_action"> <!--/#cart_items-->
<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>tổng tiền sản phẩm: <span> <?php echo number_format($this->cart_total())?></span></li>
							<li>số lượng : <span><?php echo $this->cart_number()?></span></li>
							<li>Shipping Cost <span>free</span></li>
							
						</ul>
							<a class="btn btn-default update" href="index.php?controller=cart&act=bill">thanh toán</a>
							<a class="btn btn-default check_out" href="index.php?controller=cart&act=destroy">xóa toàn bộ giỏ hàng</a>
					</div>
				</div>
				</section>
				<?php
if(isset($_GET["act"])&&$_GET["act"]=="bill")
{
?>
				<table cellpadding="5" style="width: 400px; margin: 15px auto;">
<form method="post" action="index.php?controller=cart&act=do_bill">
<tr>
<td>Họ và tên</td>
<td><input type="text" name="c_fullname" required></td>
</tr>
<tr>
<td>Địa chỉ</td>
<td><input type="text" name="c_address"></td>
</tr>
<tr>
<td>Điện thoại</td>
<td><input type="text" name="c_phone"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Thanh toán"></td>
</tr>
</form>
</table>
<?php } ?>